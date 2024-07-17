<!DOCTYPE html>
<html>
    <head>
        <title>Parkamon</title>
    </head>
    <body>
        <?php 
            require_once '../config.php';
            session_start();

                try{
                    $dbh = new PDO(DB_DSN, DB_USER, DB_PASSWORD);
                    if(isset($_POST['players'])){
                        $checkPassword = $dbh->prepare("SELECT id, password_hash FROM player WHERE id = :id");
                        $checkPassword->bindValue(':id', $_POST['players']);
                        $checkPassword->execute();
                        $checkPass = $checkPassword->fetch();

                        if(isset($_POST['pass']) && password_verify($_POST['pass'], $checkPass['password_hash'])){
                            $_SESSION['player'] = $_POST['players'];
                        } else{
                            header( "refresh:5;url=signin.php" );
                            echo 'You\'ll be redirected in about 5 secs, as you submitted a wrong password or no password. To bypass the delay, click <a href="signin.php">here</a>.';
                            exit;
                        }
                        
                    }

                    if(!isset($_SESSION['player'])){
                        header( "refresh:5;url=signin.php" );
                        echo 'You\'ll be redirected in about 5 secs, as you aren\'t logged in. To bypass the delay, click <a href="signin.php">here</a>.';
                        exit;
                    }
                
                    $currentPlayer = $dbh->prepare("SELECT name FROM player WHERE id=:playerId");
                    $currentPlayer->bindValue(":playerId", $_SESSION['player']);
                    $currentPlayer->execute();
                    $mePlayer = $currentPlayer->fetch();
                    echo "Hello, {$mePlayer['name']}!";
                    echo "<br><br><a href='catch.php'>Catch a new Parkamon!</a>";

                    $parkamon = $dbh->prepare("SELECT parkamon.breed, parkamon.location, player.name, ownership.nickname FROM parkamon JOIN ownership ON parkamon.id = ownership.parkamon_id JOIN player ON ownership.player_id = player.id WHERE :currentPlayerId = player.id ORDER BY player.name, parkamon.breed, ownership.nickname");
                    $parkamon->bindValue(':currentPlayerId', $_SESSION['player']);
                    $parkamon->execute();
                    $parkamonList = $parkamon->fetchAll();

                    echo "<p style='font-weight:bold;'>Name----Location----Player----Nickname</p>";
                    foreach($parkamonList as $list){
                        echo $list['breed'] . "---";
                        echo $list['location'] . "---";
                        echo $list['name'] . "---";
                        echo $list['nickname'] . "<br>";
                    }

                    $nickname = $dbh->prepare("SELECT * FROM ownership WHERE :currentPlayerId = player_id");
                    $nickname->bindValue(":currentPlayerId", $_SESSION['player']);
                    $nickname->execute();
                    $nickName = $nickname->fetchAll();
                    echo '<form method="post" action="rename.php"><br><p>Change Nickname!</p><p>Choose the parkamon:</p><select name="change" id="nickname">';
                        foreach($nickName as $nick){
                            echo "<option name='newName'value='{$nick['id']}'>{$nick['nickname']}</option>";
                        }
                        

                    echo '</select><br>';
                    echo '<p>Enter new nickname: </p><input type="text" name="newNickname"></input><input type="submit"></input></form><br>';
                    echo '<a href="signout.php">Log Out!</a>';

                }
                catch(PDOException $e) {
                    echo "<p>Error connecting to database!</p>";
                    echo "<p>" . $e -> getMessage() . "</p>";
                }
        ?>
    <body>
</html>
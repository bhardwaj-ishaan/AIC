<!DOCTYPE html>
<html>
    <head>
        <title>Parkamon</title>
    </head>
    <body>
        <?php 
            require_once '../config.php';

            try{
                $dbh = new PDO(DB_DSN, DB_USER, DB_PASSWORD);
                $playerName = $dbh->prepare("SELECT * FROM player");
                $playerName->execute();

                $name = $playerName->fetchAll();

                echo '<form method="post" action="catch.php"><label for = "players">Choose your player!</label><br><br><select name="return" id="players">';
                foreach($name as $n){
                    echo "<option value='{$n['id']}'>{$n['name']}</option>";
                }

                echo '</select><br><input type="submit"></input></form><br>';

                $parkamon = $dbh->prepare("SELECT parkamon.breed, parkamon.location, player.name, ownership.nickname FROM parkamon JOIN ownership ON parkamon.id = ownership.parkamon_id JOIN player ON ownership.player_id = player.id ORDER BY player.name, parkamon.breed, ownership.nickname");
                $parkamon->execute();
                $parkamonList = $parkamon->fetchAll();

                echo "<p style='font-weight:bold;'>Name----Location----Player----Nickname</p>";
                foreach($parkamonList as $list){
                    echo $list['breed'] . "---";
                    echo $list['location'] . "---";
                    echo $list['name'] . "---";
                    echo $list['nickname'] . "<br>";
                }

                $nickname = $dbh->prepare("SELECT breed, ownership.id FROM parkamon JOIN ownership ON parkamon.id = ownership.parkamon_id");
                $nickname->execute();
                $nickName = $nickname->fetchAll();
            
                echo '<form method="post" action="rename.php"><br><p>Change Nickname!</p><p>Choose the parkamon:</p><select name="change" id="nickname">';
                    foreach($nickName as $nick){
                        echo "<option value='{$nick['id']}'>{$nick['breed']}</option>";
                    }
                    

                echo '</select><br>';
                echo '<p>Enter new nickname: </p><input type="text" name="newNickname"></input><input type="submit"></input></form><br>';
            }
            catch(PDOException $e) {
                echo "<p>Error connecting to database!</p>";
                echo "<p>" . $e -> getMessage() . "</p>";
            }


        
        ?>
    <body>
</html>
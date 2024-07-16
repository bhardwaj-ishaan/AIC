<?php 
    require_once '../config.php';
    session_start();
    try{
        if(!$_SESSION['player']){
            header( "refresh:5;url=signin.php" );
            echo 'You\'ll be redirected in about 5 secs, as you aren\'t logged in. To bypass the delay, click <a href="signin.php">here</a>.';
        }
        $dbh = new PDO(DB_DSN, DB_USER, DB_PASSWORD);

        if(isset($_POST['newNickname']) && isset($_POST['change']) && isset($_SESSION['player'])){
            $newNickname = $_POST['newNickname'];
            $nickVal = $_POST['change'];

            $checkNickId = $dbh->prepare("SELECT id FROM ownership WHERE :nickVal = id");
            $checkNickId->bindValue(":nickVal", $nickVal);
            $checkNickId->execute();
            $checkId = $checkNickId->fetch();

            $checkForOwnership = $dbh->prepare("SELECT player_id FROM ownership WHERE :currentPlayerId = player_id");
            $checkForOwnership->bindValue(':currentPlayerId', $_SESSION['player']);
            $checkForOwnership->execute();
            $checksForOwnership = $checkForOwnership->fetch(); 

            var_dump($newNickname);
            var_dump($nickVal);
            var_dump($checkId);

            if(mb_strlen($newNickname) <= 8 && filter_var($nickVal, FILTER_VALIDATE_INT) && $checkId){
                if($_SESSION['player'] = $checksForOwnership['player_id']){
                    $changeNick = $dbh->prepare("UPDATE ownership SET nickname=:newNickname WHERE id=:nickVal");
                    $changeNick->bindValue(":newNickname", $newNickname);
                    $changeNick->bindValue(":nickVal", $nickVal);
                    $changeNick->execute();
                    echo "<p>Nickname Updated!</p>";
                } else{
                    echo "<p>don't even try u little hacker!</p>";
                }
                
            } else{
                echo "<p>Enter valid input please!</p>";
            }
        } else{
            echo "<p>assign newnickname and new value please</p>";
        }

        echo "<a href='game.php'>Back to game!</a>";
    }
    catch(PDOException $e) {
        echo "<p>Error connecting to database!</p>";
        echo "<p>" . $e -> getMessage() . "</p>";
    }
?>
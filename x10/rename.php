<?php 
    require_once '../config.php';
    try{
        $dbh = new PDO(DB_DSN, DB_USER, DB_PASSWORD);

        if(isset($_POST['newNickname']) && isset($_POST['change'])){
            $newNickname = $_POST['newNickname'];
            $nickVal = $_POST['change'];

            $checkNickId = $dbh->prepare("SELECT id FROM ownership WHERE :nickVal = id");
            $checkNickId->bindValue(":nickVal", $nickVal);
            $checkNickId->execute();
            $checkId = $checkNickId->fetch();
            if(mb_strlen($newNickname) <= 8 && filter_var($nickVal, FILTER_VALIDATE_INT) && $checkId){
                $changeNick = $dbh->prepare("UPDATE ownership SET nickname=:newNickname WHERE id=:nickVal");
                $changeNick->bindValue(":newNickname", $newNickname);
                $changeNick->bindValue(":nickVal", $nickVal);
                $changeNick->execute();
                echo "<p>Nickname Updated!</p>";
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
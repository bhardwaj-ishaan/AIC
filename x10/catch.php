<?php 
    require_once '../config.php';
    try{
        $dbh = new PDO(DB_DSN, DB_USER, DB_PASSWORD);
        $getRow = $dbh->prepare("SELECT * FROM parkamon ORDER BY RAND () LIMIT 1");
        $getRow->execute();
        $row = $getRow->fetch();
        $insert = $dbh->prepare("INSERT INTO ownership (player_id, parkamon_id, nickname) VALUES (:nameId, :row, 'parknick')");
        $insert->bindValue(":row", $row['id']);
        $nameId = $_POST['return'];
        $insert->bindValue(":nameId", $nameId);

        $check = $dbh->prepare("SELECT * FROM player WHERE :nameId = id");
        $check->bindValue(":nameId", $nameId);
        $check->execute();
        $checkFetch = $check->fetch();
        if($insert->execute()){
            echo '<p>Addition was a success!</p>';
        }

        if(!$checkFetch){
            echo '<p>invalid player, try again</p>';
        }

        

        echo '<a href="game.php">Go back to game!</a>';
    }
    catch(PDOException $e) {
        echo "<p>Error connecting to database!</p>";
        echo "<p>" . $e -> getMessage() . "</p>";
    }
?>
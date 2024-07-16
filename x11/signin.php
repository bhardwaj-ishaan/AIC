<?php 
    require_once '../config.php';
    try{
        $dbh = new PDO(DB_DSN, DB_USER, DB_PASSWORD);
        $players = $dbh->prepare("SELECT id,name FROM player");
        $players->execute();
        $playerNameId = $players->fetchAll();

        echo '<form action="game.php" method="post">
        <select id= "all" name = "players">';
        foreach($playerNameId as $p){
            echo "<option value='{$p['id']}'>{$p['name']}</option>";
        }
        echo '</select><br><br>
              <input type="submit"></input>';
    }
    catch(PDOException $e) {
        echo "<p>Error connecting to database!</p>";
        echo "<p>" . $e -> getMessage() . "</p>";
    }
?>


<?php 
    require_once '../config.php';
    session_start();
    try{
        $dbh = new PDO(DB_DSN, DB_USER, DB_PASSWORD);
        $players = $dbh->prepare("SELECT id,name FROM player");
        $players->execute();
        $playerNameId = $players->fetchAll();

        echo '<form action="game.php" method="post">
        <select id= "all" name = "players"><p>Choose player:</p>';
        foreach($playerNameId as $p){
            echo "<option value='{$p['id']}'>{$p['name']}</option>";
        }
        echo '</select><br><br>
              <label for="for">Password:</label>
              <input id="pass" name="pass" type="password"></input><br><br>
              <input type="submit"></input>';
    }
    catch(PDOException $e) {
        echo "<p>Error connecting to database!</p>";
        echo "<p>" . $e -> getMessage() . "</p>";
    }
?>


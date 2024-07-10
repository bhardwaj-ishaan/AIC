<?php
require '../config.php';

try {
    $dbh = new PDO(DB_DSN, DB_USER, DB_PASSWORD);
    $sth = $dbh->prepare("SELECT title , date FROM comic"); 
    $sth->execute();
    $comics = $sth->fetchAll(); 
}
catch (PDOException $e) {
    echo "<p>Error connecting to database!</p>";
}

echo "<h2>Comics</h2>";
foreach ($comics as $comic) {
    echo "<p>".$comic['title']."</p>";        
    echo "<p>".$comic['date']."</p>";        
}


?>
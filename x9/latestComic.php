<?php 
    require '../config.php';
    date_default_timezone_set('America/Los_Angeles');
    
try {
    $dbh = new PDO(DB_DSN, DB_USER, DB_PASSWORD);

    //getting multiple rows
    $sth = $dbh->prepare("SELECT * FROM comic ORDER BY date DESC LIMIT 1");
    $sth->execute();
    $comics = $sth->fetch(); //an array of arrays
    //$comics[0]['title']

    // var_dump($comics);
}
catch (PDOException $e) {
    echo "<p>Error connecting to database!</p>";
}

$image = $comics['fileName'];

echo "<h2>Comics</h2>";
echo "<p>".$comics['title']."</p>";        
echo "<img src='https://atdpsites.berkeley.edu/chalkboardmanifesto/{$image}'>";


$date = $comics['date'];
$datetime = new DateTime("$date"); 
  
echo $datetime->format('m-d-Y'); 



?>
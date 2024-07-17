<!DOCTYPE html>
<html>
<head>
    <title>Install Parkamon DB</title>
</head>
<body>
<?php
require_once "../config.php";
try {
    $dbh = new PDO(DB_DSN, DB_USER, DB_PASSWORD);
    //create comic table
    $query = file_get_contents('parkamon2.sql');
    $dbh->exec($query);
    echo "<p>Successfully installed databases</p>";
    //file_get_contents: https://www.php.net/manual/en/function.file-get-contents.php
    //exec: https://www.php.net/manual/en/pdo.exec.php#:~:text=PDO%3A%3Aexec()%20returns,%3A%3Aexec()%20returns%200%20.&text=This%20function%20may%20return%20Boolean,value%20which%20evaluates%20to%20false%20
}
catch (PDOException $e) {
    echo "<p>Error: {$e->getMessage()}</p>";
}
?>
</body>
</html>
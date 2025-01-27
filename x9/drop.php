<!DOCTYPE html>
<html>
<head>
    <title>Drop Chalkboard Manifesto DB</title>
</head>
<body>
<?php
require_once "../config.php";

try {
    $dbh = new PDO(DB_DSN, DB_USER, DB_PASSWORD);
    $dbh->exec('DROP TABLE IF EXISTS comic; DROP TABLE IF EXISTS info;');
    echo "<p>Successfully dropped databases</p>";
}
catch (PDOException $e) {
    echo "<p>Error: {$e->getMessage()}</p>";
}
?>
</body>
</html>
<?php 
    require '../config.php';
    date_default_timezone_set('America/Los_Angeles');
    
try {
    $dbh = new PDO(DB_DSN, DB_USER, DB_PASSWORD);

    //getting multiple rows
    $first = $dbh->prepare("SELECT comicID FROM comic ORDER BY date ASC LIMIT 1");
    $last = $dbh->prepare("SELECT comicID FROM comic ORDER BY date DESC LIMIT 1");
    $first->execute();
    $last->execute();

    $firstVal = $first->fetch();
    $bigVal = $last->fetch();

    if($firstVal && $bigVal){
        $firstComicID = $firstVal['comicID'];
        $lastComicID = $bigVal['comicID'];

        if(isset($_GET['comicID']) && filter_var($_GET['comicID'], FILTER_VALIDATE_INT) && $_GET['comicID'] <= $lastComicID && $_GET['comicID'] >= $firstComicID) {
            $sth = $dbh->prepare("SELECT * FROM comic WHERE comicID=:comicID");
            $sth->bindValue(":comicID", $_GET['comicID']);
        }else{
            $sth = $dbh->prepare("SELECT * FROM comic ORDER BY date DESC LIMIT 1");
        }
        $sth->execute();

        $comics = $sth->fetch(); 
        if($comics) {
            
            $previousVal = $_GET['comicID'] - 1;
            $nextVal = $_GET['comicID'] + 1;
            $image = $comics['fileName'];
            $date = $comics['date'];
            $datetime = new DateTime("$date"); 
    
        
            echo "<a href='https://atdpsites.berkeley.edu/ishaan/x9/comic.php?comicID={$previousVal}'>Previous</a>";
            echo "<a href='https://atdpsites.berkeley.edu/ishaan/x9/comic.php?comicID={$nextVal}'>Next</a>";
            echo "<a href='https://atdpsites.berkeley.edu/ishaan/x9/comic.php?comicID={$firstComicID}'>First</a>";
            echo "<a href='https://atdpsites.berkeley.edu/ishaan/x9/comic.php?comicID={$lastComicID}'>Last</a>";
    
            
                echo "<h2>Comics</h2>";     
                echo $datetime->format('m-d-Y'); 
                echo "<img src='https://atdpsites.berkeley.edu/chalkboardmanifesto/{$image}'><p>{$comics['title']}</p>";
            
        } else{
            echo '<p>No comic found</p>';
        }
    } else{
        echo "<p>Error fetching comic IDs.</p>";
    } 
    

    
}
catch (PDOException $e) {
    echo "<p>Error connecting to database!</p>";
    echo "<p>" . $e -> getMessage() . "</p>";
}

?> 

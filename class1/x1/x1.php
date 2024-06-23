<?php
    $food = ["pizza", "pasta", "popcorn"];
    $music = ["lord of the rings", "taylor swift", "ost"];
    $hobbies = ["cooking", "eating", "washing dishes"];

    $music[] = 'mario soundtrack';
    
    array_splice($food,2,1);

    for ($i=0; $i < count($food); $i++) { 
        echo "<ul><li>$food[$i]</li></ul>";
    }

    echo "<ol>";
    for ($i=0; $i < count($music); $i++) { 
        echo "<li>$music[$i]</li>";
    }
    echo "</ol>";

    echo "<ol>";
    for ($i=0; $i < count($hobbies); $i++) { 
        echo "<li>$hobbies[$i]</li>";
    }
    echo "</ol>";
?>
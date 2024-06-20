<?php
    $hotTakesArray = ["Android" => "Samsung is better than Apple.", "Music" => "Apple Music is better than Spotify", "Pizza" => "Pineapple is the best pizza topping",
    "Weather" => "Hot weather is better than cold weather", "Sauce" => "Pepper should be replaced with hot sauce", "Movie" => "Marvel movies lack imagination", 
    "Food" => "Taco Bell is best for fast food"];


    //order
    ksort($hotTakesArray);

    // start the table!
    
    echo "<table>";

    foreach ($hotTakesArray as $key => $value) { 
        // encode the values
        $encodedVal = str_rot13($value);

        // make table
        
        echo "<tr>";
        echo "<td> $key </td>";
         // make stuff red/orange
        if(str_contains($encodedVal, 'ubg' )|| str_contains($encodedVal, 'Ubg' ) || str_contains($encodedVal, 'sver') || str_contains($encodedVal, 'Sver')){
            echo "<td class='veryHotString'>$encodedVal</td>";
        } else{
            echo "<td>$encodedVal</td>";
        } 
        echo "</tr>";   
        
    }

    echo "</table>";
?>

<!DOCTYPE html>
<html>
    <head>
        <style>
            table {
                color: #333;
                font-size: 12pt;
            }
            table td {
                padding: .5em;
                border: 1px solid lightgrey;
            }
            .veryHotString {
                background-color: #FF4500; 
            }
        </style>
    </head>
    <body>

    </body>
</html>
<?php
    require_once 'header.php';

    addHeader();

    echo "<!DOCTYPE html>
<html lang='en'>
  <head>
    <title>Ishaan's Quiz</title>
    <link rel='stylesheet' href='quiz.css'>
  </head>
  <body>";

    echo '<br>Your name is: ' . htmlspecialchars($_POST['name']);

    if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) !== false){
        echo '<br>Your email is: ' . htmlspecialchars($_POST['email']);
    } else{
        echo '<br>Enter a valid email u aint fooling anyone';
    };
    if(filter_var($_POST['age'], FILTER_VALIDATE_INT) !== false){
        echo '<br>You are ' . htmlspecialchars($_POST['age']) . ' years old';
    } else{
        echo '<br>Enter a valid age u aint fooling anyone';
    };
    if(filter_var($_POST['ssn'], FILTER_VALIDATE_INT) !== false){
        echo '<br>Your Social Security Number is: ' . htmlspecialchars($_POST['ssn']);
    } else{
        echo '<br>Enter a valid SSN u aint fooling anyone';
    };
    if(filter_var($_POST['reddit'], FILTER_VALIDATE_INT) !== false){
        echo '<br>You use reddit ' . htmlspecialchars($_POST['reddit']) . ' times a week';
    } else{
        echo '<br>How much do you REALLY use reddit?';
    };
    if(isset($_POST["room"]) && isset($_POST['clothingColor']) && isset($_POST['food']) && isset($_POST['organized']) && isset($_POST['pressure']) && isset($_POST['sick'])){
        $points = 0;
        $rangeVal = htmlspecialchars($_POST['social']);
        $social = htmlspecialchars($_POST["social"]);
        $room = htmlspecialchars($_POST["room"]);
        $clothing = htmlspecialchars($_POST["clothingColor"]);
        $dinner = htmlspecialchars($_POST["food"]);
        $organize = htmlspecialchars($_POST["organized"]);
        $calm = htmlspecialchars($_POST["pressure"]);
        $sick = htmlspecialchars($_POST["sick"]);

        if($social == "black" || $social == "blue") {
            $points += 1;
        } elseif ($social == 'red')

        if($rangeVal >= 0 && $rangeVal <= 3){
            echo '<br><br>You Are: <br><br><br> <h2>C!</h2> <br><br> You hate talking to people, are anti-social, and most-likely introverted.';
        } elseif($points >= 1 && $points <= 10){
            echo '<br><br>You Are: <br><br><br> <h2>BASIC!</h2> <br><br> You are the definition of minimalism and like things without the flare.';
        } elseif($points > 10 && $points <= 20){
            echo '<br><br>You Are: <br><br><br> <h2>PHP!</h2> <br><br>You have a weird character, different from everyone else, and can be mildly to very annoying.';
        } elseif($points > 20 && $points <= 30){
            echo '<br><br>You Are: <br><br><br> <h2>JavaScript!</h2> <br><br>You are very interactive and social, and love making new friends and talking with people!';
        

    
        // echo  '<br><br><br>Your social level can be described as ' . $social . ' out of 10';
    
        // echo '<br> Your favorite room type is ' . $room;
    
        // echo '<br> You favorite clothing color is ' . $clothing;
    
        // echo '<br> Your favorite dinner is ' . $dinner;
    
        // echo '<br> You are ' . $organize . ' organized';
    
        // echo '<br> You are ' . $calm . ' calm';
    
        // echo '<br> You are sick ' . $sick;
    } else{
        echo 'One or more invalid inputs, go back and try again.';
    }

    echo '  </body>
</html>'
?>
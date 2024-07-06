<?php
    require_once 'header.php';

    addHeader();

    echo "<!DOCTYPE html>
        <html lang='en'>
            <head>
                <title>Ishaan's Quiz</title>
                <link rel='stylesheet' href='quiz.css'>
            </head>
            <body>
  ";

    echo '<br>Your name is: ' . htmlspecialchars($_POST['name']);
    echo '<br> You were born on the date ' .  htmlspecialchars($_POST["dob"]);

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
        $food = htmlspecialchars($_POST["food"]);
        $dinner = htmlspecialchars($_POST["food"]);
        $organize = htmlspecialchars($_POST["organized"]);
        $calm = htmlspecialchars($_POST["pressure"]);
        $sick = htmlspecialchars($_POST["sick"]);
        $motivate = htmlspecialchars($_POST["motivates"]);
        $passionate = htmlspecialchars($_POST["passionate"]);
        $role = htmlspecialchars($_POST["role"]);

        if($rangeVal >= 8){
            $points += 3;
        } elseif($rangeVal > 3 && $rangeVal < 8){
            $points += 1;
        } else{
            echo 'invalid option for range, go back and try again, result is wrong!';
        }

        if($clothing === "black" || $clothing === "blue") {
            $points += 1;
        } elseif ($clothing === 'red') {
            $points += 3;
        } elseif($clothing === "red-dotted") {
            $points += 2;
        } else{
            echo 'invalid option for clothing, go back and try again, result is wrong!';
        }
        if($room === "basic"){
            $points += 1;
        } elseif($room === "gaming" || $room === "royal") {
            $points += 3;
        } elseif($room === "crazy"){
            $points += 2;
        } else{
            echo 'invalid option for room, go back and try again, result is wrong!';
        }

        if($food === "pasta" || $food === "salmon"){
            $points += 2;
        } elseif($food === "pizza") {
            $points += 1;
        } elseif($food === "ic") {
            $points += 3;
        } else{
            echo 'invalid option for food, go back and try again, result is wrong!';
        }

        if($organize === "very" || $organize === "a little") {
            $points += 1;
        } elseif($organize === "confused") {
            $points += 2;
        } elseif($organize === "not") {
            $points += 3;
        } else{
            echo 'invalid option for organize, go back and try again, result is wrong!';
        }

        if($calm === "very" || $calm === "a little") {
            $points += 1;
        } elseif($calm === "confused") {
            $points += 2;
        } elseif($calm === "not") {
            $points += 3;
        } else{
            echo 'invalid option for calm, go back and try again, result is wrong!';
        }

        if($sick === "once" || $sick === "never") {
            $points += 1;
        } elseif($sick === "now") {
            $points += 3;
        } elseif($sick === "lot") {
            $points += 2;
        } else{
            echo 'invalid option for sick, go back and try again, result is wrong!';
        }       

        if($motivate === "you" || $motivate === "parent") {
            $points += 1;
        } elseif($motivate === "cousin") {
            $points += 3;
        } elseif($motivate === "people") {
            $points += 2;
        } else{
            echo 'invalid option for you, go back and try again, result is wrong!';
        }  

        if($passionate === "roblox" || $passionate === "php") {
            $points += 3;
        } elseif($passionate === "smart") {
            $points += 1;
        } elseif($passionate === "apeople") {
            $points += 2;
        } else{
            echo 'invalid option for passionate, go back and try again, result is wrong!';
        }       

        if($role === "sal" || $role === "dev") {
            $points += 1;
        } elseif($role === "jojo" || $role === "yourself") {
            $points += 2;
        } else{
            echo 'invalid option for role model, go back and try again, result is wrong!';
        }       

        if($rangeVal >= 0 && $rangeVal <= 3){
            echo '<br><br>You Are: <br><br><br> <h2>C!</h2> <br><br> You hate talking to people, are anti-social, and most-likely introverted.';
        } elseif($points >= 1 && $points <= 13){
            echo '<br><br>You Are: <br><br><br> <h2>BASIC!</h2> <br><br> You are like everyone, like pizza for dinner, and black for clothing. You can find a lot of people with interests similar to yours';
        } elseif($points > 15 && $points <= 20){
            echo '<br><br>You Are: <br><br><br> <h2>PHP!</h2> <br><br>You have a weird character, different from everyone else, and can be mildly to very annoying.';
        } elseif($points > 20 && $points <= 30){
            echo '<br><br>You Are: <br><br><br> <h2>JavaScript!</h2> <br><br>You are very interactive and social, and love making new friends and talking with people!';
        }
    } else{
        echo 'One or more invalid inputs, go back and try again.';
    }

    echo ' </body>
            </html>';
?>
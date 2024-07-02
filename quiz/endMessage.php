<?php
    require_once 'header.php';

    addHeader();

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



    $social = htmlspecialchars($_POST["social"]);
    $room = htmlspecialchars($_POST["room"]);
    $clothing = htmlspecialchars($_POST["clothingColor"]);
    $dinner = htmlspecialchars($_POST["food"]);
    $organize = htmlspecialchars($_POST["organized"]);
    $calm = htmlspecialchars($_POST["pressure"]);
    $sick = htmlspecialchars($_POST["sick"]);

    echo  '<br>Your social level can be described as ' . $social . ' out of 10';

    echo '<br> Your favorite room type is ' . $room;

    echo '<br> You favorite clothing color is ' . $clothing;

    echo '<br> Your favorite dinner is ' . $dinner;

    echo '<br> You are ' . $organize . ' organized';

    echo '<br> You are ' . $calm . ' calm';

    echo '<br> You are sick ' . $sick;
?>
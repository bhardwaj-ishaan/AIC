<?php
    $social = htmlspecialchars($_POST["social"]);
    $room = htmlspecialchars($_POST["room"]);
    $clothing = htmlspecialchars($_POST["clothingColor"]);
    $dinner = htmlspecialchars($_POST["food"]);
    $organize = htmlspecialchars($_POST["organized"]);
    $calm = htmlspecialchars($_POST["pressure"]);
    $sick = htmlspecialchars($_POST["sick"]);

    echo  'Your social level can be described as ' . $social . ' out of 10';

    echo '<br> Your favorite room type is ' . $room;

    echo '<br> You favorite clothing color is ' . $clothing;

    echo '<br> Your favorite dinner is ' . $dinner;

    echo '<br> You are ' . $organize . ' organized';

    echo '<br> You are ' . $calm . ' calm';

    echo '<br> You are sick ' . $sick;
?>
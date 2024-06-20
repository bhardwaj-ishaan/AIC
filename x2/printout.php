<?php
    require_once 'header.php';


    wonderfulHeader();
    // var_dump($_POST);
    $name = htmlspecialchars($_POST["name"]);

    echo 'Your name is: ' . $name;

    $age = htmlspecialchars($_POST["age"]);

    echo '<br> You are ' . $age . ' years old!';

    $numLang = htmlspecialchars($_POST["numlang"]);


    if($numLang == 5){
        echo '<br> 5 is a nice num of langauges';
    }


    if($numLang < 5){
        echo "<br>";
        echo 'You know '. $numLang . " languages, which is a small amount of languages, but still nice!";
    }


    if($numLang > 5){
        echo '<br> wow ur smart, ' . $name  . ' you know more than 5 languages!';
    }


    $animal = htmlspecialchars($_POST["animal"]);


    if($animal == 'dog'){
        echo '<br>' . $animal .' is a VERY NICE animal choice btw';
    } else{
        echo '<br>' . $animal . " is a very nice animal, but dog is better";
    }
?>

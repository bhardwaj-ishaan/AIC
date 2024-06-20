<?php 
    require_once 'header.php';
    wonderfulHeader();
?>

<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
    <form action = 'printout.php' method = 'post'> 
                        <label for = "name">What is your name?</label><br>
                        <input type = 'text' id = "name" name = 'name'><br>
                        <label for = 'age'>How old are you?</label><br>
                        <input type = 'number' id = 'age' name = 'age' min="13" max="18">
                        <p>How many coding languages do you know?</p>
                        <input type = 'radio' id = "2" name = 'numlang' value = '2'>
                        <label for = "2">2</label><br>
                        <input type = 'radio' id = "3" name = 'numlang' value = '3'>
                        <label for = "3">3</label><br>
                        <input type = 'radio' id = "4" name = 'numlang' value = '4'>
                        <label for = "4">4</label><br>
                        <input type = 'radio' id = "5" name = 'numlang' value = '5'>
                        <label for = "5">5</label><br>
                        <input type = 'radio' id = "6" name = 'numlang' value = '6'>
                        <label for = "6">6</label><br>
                        <input type = 'radio' id = "7" name = 'numlang' value = '7'>
                        <label for = "7">7</label><br>
                        <input type = 'radio' id = "8" name = 'numlang' value = '8'>
                        <label for = "8">8</label><br>
                        <label for = 'animal'>What is your favorite animal?</label>
                        <select id = 'animal' name = 'animal'>
                            <option value = 'Dog'>Dog</option>
                            <option value = 'Cat'>Cat</option>
                            <option value = 'Bear'>Bear</option>
                            <option value = 'Bird'>Bird</option>
                            <option value = 'Horse'>Horse</option>
                            <option value = 'Lion'>Lion</option>
                            <option value = 'Tiger'>Tiger</option>
                            <option value = 'Elephant'>Elephant</option>
                        </select><br><br>
                        <input type="submit" value="Submit">
    </form>
    </body>
</html>
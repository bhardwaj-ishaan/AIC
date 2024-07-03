<!DOCTYPE html>
<html>
    <head>
        <title>Ishaan's Quiz</title>
        <link rel="stylesheet" href="quiz.css">
        <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
        <script src="quiz.js"></script>
    </head>
    <body>
        <header><a href="/validate/">validate</a></header>
        <?php 
            include 'header.php';
            addHeader();
        ?>
        <form action="quiz.php" method="post">
            <h2>FIRST: Biographical Data</h2>
            <label for="name">Name:</label>
            <input required type="text" name="name" id="name" pattern="[A-Za-z ]+">
            <br>
            <br>
            <label for="age">Age:</label>
            <input required type="number" name="age" id="age" min="13" max="18">
            <br>
            <br>
            <label for="email">Email:</label>
            <input required type="email" name="email" id="email">
            <br>
            <br>
            <label for="dob">Date of Birth:</label>
            <input required type="date" name="dob" id="dob" max="2012-01-01" min="2000-01-01">
            <br>
            <br>
            <label for="ssn">Social Security Number:</label>
            <input required type="number" name="ssn" id="ssn" min="111111111" max="999999999">
            <br>
            <br>
            <label for="reddit">Number of times you have used reddit this week:</label>
            <input required type="number" name="reddit" id="reddit" max="5">
            <br>
            <br>
            <div class="input-group">
                <label for="social">On a scale of 1 to 10, how social are you?</label>
                <input required type="range" min="1" max="10" step="1" id="social" name="social" pattern="[1-10]"oninput="rangeValue.innerText = this.value">
                <i id="rangeValue">5</i>
            </div>
            <div class="input-group">
                <p>Which of the following is the best room: </p>
                <input required type="radio" id="basic" name="room" value="basic">
                <label for="basic"><img src="https://www.thespruce.com/thmb/fCAE88wv3KYcLeW5aRwKPsMYbtY=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/24.HamptonsModernbyChangoCo.-PrimaryBedroom-ff3e8713c3424e96898446759dca9b22.jpg" height="200px" width="300px" alt="basic"></label>
                <input required type="radio" id="gaming" name="room" value="gaming">
                <label for="gaming"><img src="https://blog.displate.com/wp-content/uploads/2021/09/img_6138b2beedbd9.jpg" alt="basic" height="200px" width="300px"></label>
                <input required type="radio" id="royal" name="room" value="royal">
                <label for="royal"><img src="https://cdn.onekindesign.com/wp-content/uploads/2019/03/Serene-Master-Bedroom-Decorating-Ideas-19-1-Kindesign.jpg" alt="royal" height="200px" width="300px"></label>
                <input required type="radio" id="crazy" name="room" value="crazy">
                <label for="crazy"><img src="https://i.dailymail.co.uk/1s/2021/10/18/15/49319597-10103689-The_charming_period_cottage_has_warm_interiors_The_only_baffling-a-24_1634566062975.jpg" alt="weird" height="200px" width="300px"></label>
            </div>
            <div class="input-group">
                <p>What is your favorite color of clothing?</p>
                <input required type="radio" id="red" name="clothingColor" value="red">
                <label for="red">Red</label>
                <input required type="radio" id="black" name="clothingColor" value="black">
                <label for="black">Black</label>
                <input required type="radio" id="red-dotted" name="clothingColor" value="red-dotted">
                <label for="red-dotted">Red but with dots</label>
                <input required type="radio" id="blue" name="clothingColor" value="blue">
                <label for="blue">Blue</label>
            </div>
            <div class="input-group">
                <p>Which of the following foods is the best dinner?</p>
                <input required type="radio" id="pasta" name="food" value="pasta">
                <label for="pasta">Pasta</label>
                <input required type="radio" id="pizza" name="food" value="pizza">
                <label for="pizza">Pizza</label>
                <input required type="radio" id="ic" name="food" value="ic">
                <label for="ic">Ice Cream</label>
                <input required type="radio" id="salmon" name="food" value="salmon">
                <label for="salmon">Salmon coulibiac</label>
            </div>
            <div class="input-group">
                <p>You are organized</p>
                <input required type="radio" id="ayes" name="organized" value="very">
                <label for="ayes">Yes</label>
                <input required type="radio" id="ano" name="organized" value="not">
                <label for="ano">No</label>
                <input required type="radio" id="little" name="organized" value="a little">
                <label for="little">A little</label>
                <input required type="radio" id="idepends" name="organized" value="a confused amount of ">
                <label for="idepends">It depends</label>
            </div>
            <div class="input-group">
                <p>You are very calm, even under pressure</p>
                <input required type="radio" id="yes" name="pressure" value="very">
                <label for="yes">Yes</label>
                <input required type="radio" id="no" name="pressure" value="not">
                <label for="no">No</label>
                <input required type="radio" id="alittle" name="pressure" value="a little">
                <label for="alittle">A little</label>
                <input required type="radio" id="depends" name="pressure" value="a confused amount of">
                <label for="depends">It depends</label>
            </div>
            <div class="input-group">
                <p>How often do you get sick?</p>
                <input required type="radio" id="lot" name="sick" value="a lot">
                <label for="lot">A lot</label>
                <input required type="radio" id="once" name="sick" value="once a year">
                <label for="once">Once a year</label>
                <input required type="radio" id="never" name="sick" value="almost never">
                <label for="never">Maybe once every two years</label>
                <input required type="radio" id="now" name="sick" value="now">
                <label for="now">I am now</label>
            </div>
            <br>
            <br>
            <input type="submit">
        </form>        
    </body>
</html>
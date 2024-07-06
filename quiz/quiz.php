<!DOCTYPE html>
<html lang="en">
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
        <form action="endMessage.php" method="post">
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
            <input required type="number" name="ssn" id="ssn" min="100000000" max="999999999">
            <br>
            <br>
            <label for="reddit">Number of times you have used reddit this week:</label>
            <input required type="number" name="reddit" id="reddit" max="5">
            <br>
            <br>
            <br>
            <h2>Now, The Real Quiz:</h2>
            <br>
            <br>
            <div class="input-group">
                <label for="social" id="special">On a scale of 1 to 10, how social are you?</label>
                <input type="range" min="1" max="10" step="1" id="social" name="social" oninput="rangeValue.innerText = this.value">
                <i id="rangeValue">5</i>
            </div>
            <div class="input-group">
                <p>Which of the following is the best room: </p>
                <input required type="radio" id="basic" name="room" value="basic">
                <label for="basic"><img src="https://www.thespruce.com/thmb/fCAE88wv3KYcLeW5aRwKPsMYbtY=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/24.HamptonsModernbyChangoCo.-PrimaryBedroom-ff3e8713c3424e96898446759dca9b22.jpg" height="200" width="300" alt="basic"></label>
                <input required type="radio" id="gaming" name="room" value="gaming">
                <label for="gaming"><img src="https://blog.displate.com/wp-content/uploads/2021/09/img_6138b2beedbd9.jpg" alt="basic" height="200" width="300"></label>
                <input required type="radio" id="royal" name="room" value="royal">
                <label for="royal"><img src="https://cdn.onekindesign.com/wp-content/uploads/2019/03/Serene-Master-Bedroom-Decorating-Ideas-19-1-Kindesign.jpg" alt="royal" height="200" width="300"></label>
                <input required type="radio" id="crazy" name="room" value="crazy">
                <label for="crazy"><img src="https://i.dailymail.co.uk/1s/2021/10/18/15/49319597-10103689-The_charming_period_cottage_has_warm_interiors_The_only_baffling-a-24_1634566062975.jpg" alt="weird" height="200" width="300"></label>
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
                <input required type="radio" id="idepends" name="organized" value="confused">
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
                <input required type="radio" id="depends" name="pressure" value="confused">
                <label for="depends">It depends</label>
            </div>
            <div class="input-group">
                <p>How often do you get sick?</p>
                <input required type="radio" id="lot" name="sick" value="lot">
                <label for="lot">A lot</label>
                <input required type="radio" id="once" name="sick" value="once">
                <label for="once">Once a year</label>
                <input required type="radio" id="never" name="sick" value="never">
                <label for="never">Literally Never</label>
                <input required type="radio" id="now" name="sick" value="now">
                <label for="now">I am now</label>
            </div>
            <div class="input-group">
                <p>What motivates you?</p>
                <input required type="radio" id="you" name="motivates" value="you">
                <label for="you">Making yourself proud</label>
                <input required type="radio" id="parent" name="motivates" value="parent">
                <label for="parent">Making your parents proud</label>
                <input required type="radio" id="cousin" name="motivates" value="cousin">
                <label for="cousin">Being better than your cousin</label>
                <input required type="radio" id="people" name="motivates" value="people">
                <label for="people">Annoying People</label>
            </div>
            <div class="input-group">
                <p>What are you passionate about?</p>
                <input required type="radio" id="roblox" name="passionate" value="roblox">
                <label for="roblox">Roblox</label>
                <input required type="radio" id="php" name="passionate" value="php">
                <label for="php">PHP</label>
                <input required type="radio" id="smart" name="passionate" value="smart">
                <label for="smart">Being Smart</label>
                <input required type="radio" id="apeople" name="passionate" value="apeople">
                <label for="apeople">Again, Annoying People</label>
            </div>
            <div class="input-group">
                <p>Who is your role model?</p>
                <input required type="radio" id="dev" name="role" value="dev">
                <label for="dev">Dev</label>
                <input required type="radio" id="yourself" name="role" value="yourself">
                <label for="yourself">Yourself</label>
                <input required type="radio" id="sal" name="role" value="sal">
                <label for="sal">Sal Khan</label>
                <input required type="radio" id="jojo" name="role" value="jojo">
                <label for="jojo">JoJo Siwa</label>
            </div>
            <br>
            <br>
            <button>Submit</button>
        </form>        
    </body>
</html>
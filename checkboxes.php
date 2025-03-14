<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>checkboxes</title>
</head>
<body>
    <h2>Did you did these all?</h2>
    <form action="checkboxes.php" method="post">
        <input type="checkbox" name="kumain" value="Kumain" id="kumain"> 
        Kumain <br>
        <input type="checkbox" name="play" value="Play" id="play"> 
        Play TFT <br>
        <input type="checkbox" name="coding" value="Coding" id="coding"> 
        Coding<br>
        <input type="checkbox" name="sleep" value="Sleep" id="sleep"> 
        Sleep<br>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>

<?php 
    if(isset($_POST['submit'])) {
        $kumain = isset($_POST['kumain']);
        $play = isset($_POST['play']);
        $coding = isset($_POST['coding']);
        $sleep = isset($_POST['sleep']);

        if($kumain == true) {
            echo "You did well kumain kana! <br>";
        }if($play == true){
            echo "Yehey naka laro ka narin!!! <br>";
        }if($coding == true){
            echo "Very Good so productive today! <br>";
        }if($sleep == true){
            echo "nice nakaatulog kaa <br>";
        }if(empty($kumain) == true){
            echo "what di ka pa kumain? kumain kana o kakainin kita <br>";
        }if(empty($play) == true){
            echo "what you dont play? ok... <br>";
        }if(empty($coding) == true){
            echo "Kailangan mo yan gawin!!! kaailangan mo ng magtrabaho <br>";
        }if(empty($sleep) == true){
            echo "tulog tulog rin zombie <br>";
        } 
    } else{
        echo 'stop';
    }

?>
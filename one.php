<?php 
    // arithmetic operators (+, -, *, /, **, %)
    $x = 10;
    $y = 10;

    $plus = $x + $y; 
    $minus = $x - $y;
    $times = $x * $y;
    $divide = $x / $y;
    $modulo = $x % $y;
    $power = $x ** $y;

    echo "Arithmetic Operators <br>";
    echo "{$x} + {$y} = {$plus} <br>";
    echo "{$x} - {$y} = {$minus} <br>";
    echo "{$x} x {$y} = {$times} <br>";
    echo "{$x} / {$y} = {$divide} <br>";
    echo "{$x} % {$y} = {$modulo} <br>";
    echo "{$x} ** {$y} = {$power} <br>";

    echo "Increment and Decrement <br>";

    $x++;
    $y--;

    echo "{$x} x increment <br>";
    echo "{$y} y decrement <br>";

    $x+= 9;
    $y-= 9;
    
    echo "This is a multi increment {$x} x + 10 increment <br>";
    echo "This is a multi decrement {$y} y - 9 decrement <br>";

    // Operator Precedence () || ** || * / % || + -
    echo "Order of precedence <br>";
    $totalPrecedence = 1 + 2 - 3 * 4 / 5 % 6 ** 7;
    echo "{$totalPrecedence} <br>";






    echo "<br><br>";
    echo "MEOWS <br>";
    echo "MEOWS <br><br>";
    // This is a single comment
    /* 
        This iss
        a multiline 
        comment
    */
    $food = "siomai";
    $name = "Matthew David Fernandez ";
    $gamingName = "ChewwwyOnTop, Chewwwinggum, (chewwwcolate)";
    $age = 18;
    $gwa = 1.27;
    $keyboard = 13.50;
    $hungry = true;
    $quantity = 3;
    echo "Hello! {$name} your favorite food is {$food} and you are {$age}yrs old <br> ";
    echo "your keyboard price is \${$keyboard} <br>";
    echo "your gwa is {$gwa} <br> ";
    echo "Your gaming namaes are: <br> {$gamingName} <br>";
    echo "Hungry? {$hungry} <br>";

    $total = $keyboard * $quantity;
    echo "keyboard{$keyboard} x quantity{$quantity} = {$total}";
    echo "<br><br>";

    

    //variable
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <button>A button</button>
</body>
</html>
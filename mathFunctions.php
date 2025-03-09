<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="mathFunctions.php" method="post">
        <label for="number">Enter a number</label>
        <input id="number" type="text" name="number" />
        <input type="submit" value="Submit">
    </form>
    <?php 
        $num = $_POST["number"];
        $numExpression = null;
        // $numExpression = ceil($num);
        // $numExpression = floor($num);
        // $numExpression = round($num);
        // $numExpression = abs($num);
        // $numExpression = pi();
        
        $numExpression = sqrt($num);

        echo "Number: {$numExpression} <br> <br>"
    ?>  
    <form action="mathFunctions.php" method="post">
        <label for="x">x: </label>
        <input type="text" id="x" name="x">
        <br>
        <label for="y">y: </label>
        <input type="text" id="y" name="y">
        <br>
        <input type="submit" value="Submit">
    </form>

    <?php 
        $x = $_POST["x"];
        $y = $_POST["y"];
        $total = null;
        // $total = pow($x, $y);
        // $total =max($x, $y);
        // $total = min($x, $y);
        $total = rand($x, $y);
        echo "Number: {$total} <br> <br>";
    ?>  
</body>
</html>


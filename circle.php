<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="circle.php" method="post">
        <label for="radius">Radius: </label> <br>
        <input type="nummber" name="radius" id="radius"/>
        <input type="submit" value="submit">
    </form>
</body>
</html>

<?php 
    $radius = $_POST['radius'];
    $circumference = 2 * pi() * $radius;
    $circumference = round($circumference, 2);

    $area = pi() * pow($radius, 2);
    $area = round($area, 2);

    $volume = 4/3 *pi() * pow($radius, 3);
    $volume = round($volume, 2);

    echo "The circumference of the radius {$radius} is {$circumference}cm <br>";
    echo "The area is {$area}cm^2 <br>";
    echo "The volume is {$volume}cm^3 <br>";
?>
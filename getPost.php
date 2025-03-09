<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Post lessons</title>
</head>
<body>

    <h2>Welcome to bearbrand</h2>
    <p>Bear brand: 13pesos</p>

    <form action="index.php" method="post">    
        <label for="quantity">Quantity: </label> <br>
        <input id="quantity" style="margin-bottom: 7px;" name="quantity" type="number" />

        <br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>

<?php 
    $quantity = $_POST['quantity'];
    $price = 13;

    $total = $price * $quantity;

    echo "You buy {$quantity} bearbrand/s that is total to {$total}";
?>
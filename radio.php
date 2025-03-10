<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <input type="radio" name="payment" value="Cash" id="cash">
        <label for="cash">Cash</label><br>
        <input type="radio" name="payment" value="Gcash" id="gcash">
        <label for="gcash">Gcash</label><br>
        <input type="radio" name="payment" value="Maya" id="maya">
        <label for="maya">Maya</label><br>
        <input type="submit" name="confirm" value="Confirm">
    </form>
</body>
</html>

<?php 
    if(isset($_POST['confirm'])){
        if(isset($_POST['payment'])) {
            $payment = $_POST['payment'];
            
            if($payment == 'Cash') {
                echo "You selected " . $payment;
            } elseif($payment == 'Gcash') {
                echo "You selected " . $payment;
            } else {
                echo "You selected " . $payment;
            }
        } else {
            echo "pls select";
        }
        
    } else {
        echo "Stop";
    }
?>
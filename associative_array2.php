<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associative array</title>
</head>
<body>
    <form action="associative_array2.php" method="post">
        <label for="country">Enter a South East Asia country</label>
        <br>
        <input type="text" name="country" id="country">
        <input type="submit" value="submit">
    </form>
</body>
</html>


<?php 
    $countries = array(
        "Brunei" => "Bandar Seri Begawan",
        "Cambodia" => "Phnom Penh",
        "Indonesia" => "Jakarta",
        "Laos" => "Vientiane",
        "Malaysia" => "Kuala Lumpur",
        "Myanmar" => "Naypyidaw",
        "Philippines" => "Manila",
        "Singapore" => "Singapore",
        "Thailand" => "Bangkok",
        "Timor-Leste" => "Dili",
        "Vietnam" => "Hanoi",
    );

    $country = $countries[$_POST['country']];
    echo $country;
?>

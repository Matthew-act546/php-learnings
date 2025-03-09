<?php
session_start(); // Start the session

// Define the countries and their capitals
$countries = [
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
    "Albania" => "Tirana",
    "Andorra" => "Andorra la Vella",
    "Armenia" => "Yerevan",
    "Austria" => "Vienna",
    "Azerbaijan" => "Baku",
    "Belarus" => "Minsk",
    "Belgium" => "Brussels",
    "Bosnia and Herzegovina" => "Sarajevo",
    "Bulgaria" => "Sofia",
    "Croatia" => "Zagreb",
    "Cyprus" => "Nicosia",
    "Czech Republic" => "Prague",
    "Denmark" => "Copenhagen",
    "Estonia" => "Tallinn",
    "Finland" => "Helsinki",
    "France" => "Paris",
    "Georgia" => "Tbilisi",
    "Germany" => "Berlin",
    "Greece" => "Athens",
    "Hungary" => "Budapest",
    "Iceland" => "Reykjavik",
    "Ireland" => "Dublin",
    "Italy" => "Rome",
    "Kazakhstan" => "Nur-Sultan",
    "Kosovo" => "Pristina",
    "Latvia" => "Riga",
    "Liechtenstein" => "Vaduz",
    "Lithuania" => "Vilnius",
    "Luxembourg" => "Luxembourg",
    "Malta" => "Valletta",
    "Moldova" => "Chișinău",
    "Monaco" => "Monaco",
    "Montenegro" => "Podgorica",
    "Netherlands" => "Amsterdam",
    "North Macedonia" => "Skopje",
    "Norway" => "Oslo",
    "Poland" => "Warsaw",
    "Portugal" => "Lisbon",
    "Romania" => "Bucharest",
    "Russia" => "Moscow",
    "San Marino" => "San Marino",
    "Serbia" => "Belgrade",
    "Slovakia" => "Bratislava",
    "Slovenia" => "Ljubljana",
    "Spain" => "Madrid",
    "Sweden" => "Stockholm",
    "Switzerland" => "Bern",
    "Turkey" => "Ankara",
    "Ukraine" => "Kyiv",
    "United Kingdom" => "London",
    "Vatican City" => "Vatican City"
];

// If there is no stored country, generate a new one
if (!isset($_SESSION['random_country'])) {
    $keys = array_keys($countries);
    $rand_country = array_rand($keys);
    $_SESSION['random_country'] = $keys[$rand_country]; // Store random country
    $_SESSION['correct_answer'] = $countries[$_SESSION['random_country']]; // Store correct capital
}

// Get the stored country and capital
$random_country = $_SESSION['random_country'];
$correct_answer = $_SESSION['correct_answer'];
$message = "";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['enter_country'])) {
    $enter_country = trim($_POST['enter_country']);

    // Check the answer
    if (strcasecmp($enter_country, $correct_answer) == 0) {
        $message = "✅ Correct! The capital of $random_country is $correct_answer.";
    } else {
        $message = "❌ Wrong! The correct answer is $correct_answer.";
    }

    // Generate a new question AFTER showing the answer
    $keys = array_keys($countries);
    $rand_country = array_rand($keys);
    $_SESSION['random_country'] = $keys[$rand_country]; 
    $_SESSION['correct_answer'] = $countries[$_SESSION['random_country']];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>What Capital?</title>
</head>
<body>
    <h2>Welcome to the game! <br>What Capital?</h2>
    <p>What is the capital of <b><?php echo $random_country; ?></b>?</p>

    <form method="post">
        <label for="country">Enter capital:</label><br>
        <input type="text" name="enter_country" id="country" required><br>
        <input type="submit" value="Submit">
    </form>

    <br>
    <?php 
        if (!empty($message)) {
            echo "<p>$message</p>";
        }
    ?>
</body>
</html>

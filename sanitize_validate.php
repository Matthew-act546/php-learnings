<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="sanitize_validate.php" method="post">
        <label for="username">Username: </label> <br>
        <input type="text" name="username" id="username"> <br>
        <label for="email">Email: </label> <br>
        <input type="email" name="email" id="email"> <br>
        <label for="age">Age: </label> <br>
        <input type="text" name="age" id="age"> <br>
        <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>

<?php 
    if(isset($_POST["submit"])) {
        $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
        $age = filter_input(INPUT_POST, "age", FILTER_SANITIZE_NUMBER_INT);

        
        $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
        $age = filter_input(INPUT_POST, "age", FILTER_VALIDATE_INT);

        if(empty($email)) {
            echo "You didnt enter a valid email <br>";
        } if(empty($age)) {
            echo "You didnt enter a valid age <br>";
        } else {
            echo "Hello {$username} you are {$age} years old. <br>Your Email: {$email}";
        }

       
    }
?>
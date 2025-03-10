<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="isset_isempty.php" method="post">
        <label for="firstname">Enter first name:</label>
        <input type="text" name="firstname" id="firstname">
        <br>
        <label for="lastname">Enter last name:</label>
        <input type="text" name="lastname" id="lastname">
        <br>
        <input type="submit" name="login" value="submit">
    </form>
</body>
</html>

<?php
    // isset() function checking if the value is NULL
    // empty() checking if the string is empty 
    
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $login = $_POST['login'];

    if(isset($login)) {
        if(empty($firstname)) {
            echo "The first name is empty <br>";
        } if(empty($lastname)) {
            echo "The last name is empty";
        } elseif(empty($firstname) && empty($lastname)) {
            echo "you didn't make an input :/";
        } else {
            echo "Welcome {$firstname} {$lastname}!";
        }
    } else {
        echo "it is not set";
    }



    // if(isset($firstname)) {
    //     echo "Good you have name";
    // } else {
    //     echo "Noo... a null";
    // }
    // echo '<br>';
    // if(empty($firstname)){
    //     echo " empty";
    // } else {
    //     echo "Not empty";
    // }
?>
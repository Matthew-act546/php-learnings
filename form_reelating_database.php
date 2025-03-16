<?php
    include('database.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
        <label for="username">Username</label><br>
        <input type="text" name="username" id="username"><br>
        <label for="password">Password</label><br>
        <input type="password" name="password" id="password"><br>
        <input type="submit" name="login" value="Log in">
    </form>
</body>
</html>
<?php

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
        $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);
        if(empty($username) || empty($password)) {
            echo "Username/Password is eempty";
        } else {
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO users (user_name, password) VALUES ('$username', '$hash')";


            try {
                mysqli_query($connect, $sql);
                echo "succesfully added";
            } catch (mysqli_sql_exception) {
                echo "try again";
            }   
            
        }
    }
    
    mysqli_close($connect)
?>
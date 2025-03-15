<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
        <label for="username">Username</label> <br>
        <input type="text" name="username" id="username"> <br>
        <label for="password">Password</label> <br>
        <input type="password" name="password" id="password"> <br>
        <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>

<?php 
    echo "<br>";
    foreach($_SERVER as $key => $value) {
        echo "{$key} = {$value} <br>";
    }
?>
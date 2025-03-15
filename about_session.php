<?php 
    session_start();
    echo "Welcome to our about session php " . $_SESSION['username'] . "<br>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="session.php" method="post">
        <input type="submit" name="logout" value="logout">
    </form>
</body>
</html>

<?php
    if(isset($_POST['logout'])) {
        session_destroy();
    }
?>


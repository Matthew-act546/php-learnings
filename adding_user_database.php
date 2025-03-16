<?php
    include('database.php');

    $username = 'tabtab';
    $password = "tabtab123";
    $hash_password = password_hash($password, PASSWORD_DEFAULT);
    $sql = "INSERT INTO users (user_name, password)
            VALUES ('$username', '$hash_password')";

    try {
        mysqli_query($connect ,$sql);
        echo "<br>User is added!";
    }catch(mysqli_sql_exception) {
        echo "There seems a problem";
    }
    

    mysqli_close($connect)
?>
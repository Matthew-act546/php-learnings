<?php
    include('database.php');

    $sql = "SELECT * FROM users";
    $result = mysqli_query($connect, $sql);
    
    if(mysqli_num_rows($result) > 0) {
        while($key = mysqli_fetch_assoc($result)) {
            echo $key["id"] . "<br>";
            echo $key["user_name"] . "<br>";
            echo $key["register_date"] . "<br>";
        }
    } else{
        echo "Cant see it";
    }

    mysqli_close($connect);
?>
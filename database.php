<?php
    // 1. mysqli extension
    // 2. PDO (PHP Data Objects) 

    $db_server = 'localhost';
    $db_user = 'root';
    $db_pass = "";
    $db_name = "businessdb";
    $connect = "";

    
    
    try {
        $connect = mysqli_connect($db_server, $db_user, $db_pass, $db_name);
    } catch(mysqli_sql_exception) {
        echo "You're not connected";
    }   
    if($connect) {
        echo "You're connected";
    }
    
?>
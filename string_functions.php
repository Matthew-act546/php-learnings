<?php 
    $username = "Matthew David C. Fernandez";
    $arr_username = array("Matthew" , "David", "C.", "Fernandez");


    $lower_user = strtolower($username);
    $upper_user = strtoupper($username);
    $trim_user = trim($username);
    $pad_user = str_pad($username, 40, '-');
    $replace_user = str_replace(" ", "-", $username);
    $reverse_user = strrev($username);
    $shuffle_user = str_shuffle($username);
    $compare_user = strcmp($username, "Matthew David C. Fernandez");  
    $length_user = strlen($username);
    $pos_user = strpos($username, 'D');
    $first_name = substr($username , 0, 13);
    $last_name = substr($username , 13);
    $explode_user = explode(" ", $username);
    $implode_arr_user = implode(" ", $arr_username);

    echo $lower_user . "<br>";
    echo $upper_user . "<br>";
    echo $trim_user . "<br>";
    echo $pad_user . "<br>";
    echo $replace_user . "<br>";
    echo $compare_user . "<br>";
    echo $length_user . "<br>";
    echo $pos_user . "<br>";
    echo $first_name . "<br>";
    echo $last_name . "<br>";
    foreach ($explode_user as $usernames) {
        echo $usernames;
    }
    echo "<br>";
    echo $implode_arr_user . "<br>";
?>  
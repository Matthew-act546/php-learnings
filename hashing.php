<?php 
    $password = "MeowMeowMeow";

    $hash = password_hash($password, PASSWORD_DEFAULT);

    echo $hash . "<br>";

    if(password_verify("MeowMeowMeow", $hash)) {
        echo "Welcome";
    } else {
        echo "not welcome";
    }

?>
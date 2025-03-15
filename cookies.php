<?php  
    setcookie("gadget", "laptop", time() + (86400 * 3), '/');
    setcookie("food", "siomai", time() + (86400 * 2), '/');
    setcookie("shoe", "nike", time() + (86400 * 3), '/');

    foreach($_COOKIE as $key => $value) {
        echo "key: {$key} || value: {$value} <br>";
    }
?>
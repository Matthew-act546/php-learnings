<?php 
    $age = -12;

    if($age >= 18) {
        echo "You may enter this site because you above 18<br>
        age: {$age}";
    } elseif(($age < 0)){
        echo "That wasnt a valid age. <br> Age: {$age}";
    }
    else {
        echo "You may not enter this website. Your age is less than 18 <br>Age: {$age}";
    }
?>
<?php   
    $number = 4896854;

    // functions
    $num1 = 2;
    $num2 = 2;
    function add($num1, $num2){
        return $num1 + $num2;
    }

    function multiply($num1, $num2){
        return $num1 * $num2;
    }

    function divide($num1, $num2){
        return $num1 / $num2;
    }

    function subtract($num1, $num2){
        return $num1 - $num2;
    }

    echo divide($num1, $num2) . "<br>";


    function is_even($number) {
        $calculate = $number % 2;

        if ($calculate == 0) {
            echo "number: {$number} is even";
        } else {
            echo "number: {$number} is odd";
        }
    }

    is_even($number);

    function hypotenuse(float $a, float $b) {
        $c = sqrt(pow($a, 2) + pow($b, 2));

        echo $c;
    }
    
    echo "<br>";
    hypotenuse(3,4) 
?>
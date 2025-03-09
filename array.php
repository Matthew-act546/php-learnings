<?php 
    $favoriteFoods = array("egg", "siomai", "pancit canton", "spaghetti");

    // $favoriteFoods[0] = 'whitee';
    array_push($favoriteFoods, 'dumpling');
    array_pop($favoriteFoods);
    array_shift($favoriteFoods);
    $favoriteFoods = array_reverse($favoriteFoods);
    echo count($favoriteFoods) . "<br>";

    echo "while loop <br>";
    $i = 0;
    while($i < count($favoriteFoods)) {
        echo $favoriteFoods[$i] . "<br>";
        $i++;
    }
    echo "<br> <br>";
    echo "foreach loop <br>";
    foreach($favoriteFoods as $food) {
        echo $food . "<br>";
    }
?>
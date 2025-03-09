<?php

    $capitals = array(
        "Philippines" => "Manila",
        "China" => "Beijing",
        "Taiwan" => "Taipei",
        "France" => "Paris",
        "Russia" => "Moscow",
    );
    
    // $capitals['France'] = "Munich";
    $capitals['Indonesia'] = "jakarta";
    array_pop($capitals);
    array_shift($capitals);
    $keys = array_keys($capitals);
    $values = array_values($capitals);
    $capitals = array_flip($capitals);
    $capitals = array_reverse($capitals);
    echo "Total: " . count($capitals) . '<br>';

    foreach($capitals as $key => $value) {
        echo "{$key}: {$value} <br>";
    }
    
    echo "<br>";
    foreach($keys as $key) {
        echo "Keys: {$key} <br>";
    }
    echo "<br>";
    foreach($values as $value) {
        echo "Values: {$value} <br>";
    }
?>
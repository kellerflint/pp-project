<?php

function printArr($numbers) {
    echo "<p>";
    for ($i = 0; $i < sizeof($numbers); $i++) {
        echo "{$numbers[$i]} ";
    }
    echo "</p>";
}

function largest($array) {
    $max = 0;
    foreach($array as $value) {
        if ($max < $value) {
            $max = $value;
        }
    }
    return $max;
}

function removeDups($array) {
    $array2 = [];
    foreach ($array as $number) {
        if (!in_array($number, $array2)) {
            $array2[] = $number;
        }
    }
    return $array2;
}

function distribution($array) {
    sort($array);
    $assoc = array();
    foreach($array as $value) {
        if (array_key_exists($value, $assoc)) {
            $assoc[$value]++;
        } else {
            $assoc[$value] = 1;
        }
    }
    return $assoc;
}
<?php

function printArr($numbers) {
    for ($i = 0; $i < sizeof($numbers); $i++) {
        echo "<p>{$numbers[$i]}</p>";
    }
}
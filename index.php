<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Paired Program 1</title>
</head>
<body>
<h1>Paired Program 1</h1>
<?php

    include "functions.php";

    $numbers = [7,9,8,9,8,8,6];

    printArr($numbers);

    echo "<p>Largest: "  .largest($numbers) . "<p>";

    echo "<h2>Without Duplicates</h2>";

    echo printArr(removeDups($numbers));

?>
</body>
</html>
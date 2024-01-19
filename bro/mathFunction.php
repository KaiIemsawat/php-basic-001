<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="mathFunction.php" method="POST">
        <label>x</label>    
        <input type="text" name="x">
        <label>y</label>    
        <input type="text" name="y">
        <label>z</label>    
        <input type="text" name="z">
        <input type="submit" value="total">
    </form>
</body>
</html>

<?php
    $x = $_POST["x"];
    $y = $_POST["y"];
    $z = $_POST["z"];
    $total = null;

    $abs = abs($x);
    $round = round($x);
    $floor = floor($x);
    $ceil = ceil($x);
    $power = pow($x, $y);
    $root = sqrt($x);
    $max = max($x, $y, $z);
    $min = min($x, $y, $z);
    $pi = pi();
    $random = rand();
    $randomWithLength = rand(1, 6); // from a number to another number

    echo "original x : {$x} <br>";
    echo "original y : {$y} <br>";
    echo "abs : {$abs} <br>";
    echo "round : {$round} <br>";
    echo "floor : {$floor} <br>";
    echo "ceil : {$ceil} <br>";
    echo "pow : {$power} <br>";
    echo "square root (from x) : {$root} <br>";
    echo "max value : {$max} <br>";
    echo "min value : {$min} <br>";
    echo "pi value : {$pi} <br>";
    echo "random value : {$random} <br>";
    echo "random with length value : {$randomWithLength} <br>";

?>
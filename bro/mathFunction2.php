<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Math Function </h1>
    <form action="mathFunction2.php" method="POST">

    <label>Radius : </label>
    <input type="text" name="radius" >
    <input type="submit" value="calculate" >
    </form>
</body>
</html>

<?php
    $radius = $_POST["radius"];
    $circumference = null;
    $area = null;

    $circumference = 2 * pi() * $radius;
    $circumference = round($circumference, 2); // round and render only 'n' digit (2 in this case)

    $area = pi() * pow($radius, 2);
    $area = round($area, 2);

    $volumn = 4/3 * pi() * pow($radius, 3);
    $volumn = round($volumn, 2);

    echo "Radius = {$radius} <br>";
    echo "Circumference = {$circumference}cm <br>";
    echo "Area = {$area}sqr cm <br>";
    echo "Volumn = {$volumn}cubic cm <br>";
    
?>
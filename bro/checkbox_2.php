<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="checkbox_2.php" method="POST">
        <input type="checkbox" name="foods[]" value="Pizza">Pizza<br>
        <input type="checkbox" name="foods[]" value="Hamburger">Hamburger<br>
        <input type="checkbox" name="foods[]" value="Hotdog">Hotdog<br>
        <input type="checkbox" name="foods[]" value="Taco">Taco<br>
        <input type="submit" name="submit" >
    </form>
</body>
</html>

<?php
    if (isset($_POST["submit"])) {
        if (empty($_POST["foods"])) {
            echo "No food is selected. Don't you like anything?";
        }
        else {
            $foods = $_POST["foods"];
            foreach($foods as $food) {
                echo $food ."<br>";
            }
        }

    }
?>
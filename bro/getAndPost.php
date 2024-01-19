<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="getAndPost.php" method="GET">
        <label>Username : </label><br>
        <input type="text" name="username">
        <label>Password : </label><br>
        <input type="password" name="password">
        <input type="submit" value="Log in">
    </form>
</body>
</html>

<?php
    echo "{$_GET["password"]} <br>"; // both ways can add line brake
    echo $_GET["username"] . "<br>";
?> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="getAndPost.php" method="POST">
        <label>Username : </label><br>
        <input type="text" name="username">
        <label>Password : </label><br>
        <input type="password" name="password">
        <input type="submit" value="Log in">
    </form>
</body>
</html>

<?php
    echo "{$_POST["password"]} <br>"; // both ways can add line brake
    echo $_POST["username"] . "<br>";
?>

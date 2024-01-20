<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="radioBtn.php" method="POST">
        <input type="radio" name="credit_card" value="visa">Visa<br>
        <input type="radio" name="credit_card" value="mastercard">Mastercard<br>
        <input type="radio" name="credit_card" value="amex">Amex<br>
        <input type="submit" name="confirm" value="confirm">
    </form>
</body>
</html>

<?php
    if (isset($_POST["confirm"])) {

        $credit_card = null;

        if (isset($_POST["credit_card"])) {
            $credit_card = $_POST["credit_card"];
        }

        switch($credit_card) {
            case "visa":
                echo "Visa is selected";
                break;
            case "mastercard":
                echo "Mastercard is selected";
                break;
            case "amex":
                echo "Amex is selected";
                break;
            default:
                echo "Please select a card";
        }

    }

?>
<!-- ---------- PHP Data Types ---------- -->

<!-- 
    - String        Series of characters surrounded by quotes
    - Integer       Whole numbers
    - Float         Decimal numbers
    - Boolean       true | false
    - Array         Special variabel, which can hold more than one value
    - Object        A class
    - NULL          Empty variable
    - Resource      Special variable that holds a resource
-->

 <!-- ---------- Variable Rule ----------  -->
<!-- 
    - Variables must be prefixed with $
    - Variables must start with a letter or the underscore character
    - Variables can't start with a number
    - Variables can only contain alpha-numberic charanters and underscores(A-Z, 0-9, and _ )
    - Variables are case-sensitive ($name and $Name are two different variables)
-->
<?php 

$name = "Zukkii";
$age = 45;
$hasKids =true;

echo $hasKids;
echo " : ";
var_dump($hasKids);
echo " - ";
// Combine 
echo "Name : " . $name;
echo " - ";
echo $name. ' is '. $age. ' yeas old';

echo " - ";
echo "2" + "3"; // will get 5 not 23

echo " - ";
// Constance : much like const in JS
define('HOST', 'localhost');
echo HOST;
?>


<?php

    // $y = 12;

    // function registerUser() {
    //     global $y;
    //     echo "this is : " .  $y;
    //     $x = 10;
    //     echo "<br> User registered";
    // }

    // echo $x; // not properly use
    // echo "<br>";
    // registerUser();

    // function registerUser($email) {
    //     echo $email . " - registered";
    // }

    // registerUser("Zukkii@titann.com");

    function sum($n1 = 4, $n2 = 5) {
        return $n1 + $n2;
    };
    $sumNumber = sum();
    echo $sumNumber;
    
    echo '<br>';
    
    $subtract = function($n1, $n2) {
        return $n1 - $n2;
    };
    echo $subtract(32, 12 );
    
    echo '<br>';
    
    $multi = fn($n1, $n2) => $n1 * $n2;
    echo $multi(3, 6);
?>
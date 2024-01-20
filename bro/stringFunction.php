<?php

    $username = "    Zukkii Titann";
    $names = ["Titann", "Zukkii", "Kinkin"];

    echo strtolower($username) . "<br>";
    echo strtoupper($username) . "<br>";
    echo "{$username}" . "{$username} <br>";
    echo trim($username) . trim($username) . "<br>";
    echo str_pad($username, 20, ">") . "<br>";
    echo str_replace(" ","-", $username) . "<br>";
    echo strrev($username). "<br>";
    echo str_shuffle($username). "<br>";
    echo strcmp($username, "    Zukkii Titann") . "<br>"; // 0 for equals
    echo strcmp($username, "    Zukkii Titan") . "<br>"; // 1 if the first string is greater than the second.
    echo strcmp($username, "    Zukkii Titannn") . "<br>"; // -1 if the first string is less than the second.
    echo strcmp($username, "ZukkiiTitann") . "<br>"; // Some other number
    echo strlen($username), "<br>";
    echo strpos($username, "T"), "<br>";
    echo substr($username, 4, 6), "<br>"; // original, first, how many index

    foreach(explode(" ", $username) as $name) {
        echo "Name : " . $name . "<br>";
    }

    echo implode("-", $names);

?>
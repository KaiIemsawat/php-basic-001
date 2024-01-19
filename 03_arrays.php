<?php
    // Simple Array
    $numbers = [1, 23, 523, 12, -2];

    $fruits = array("apple", "banana", "pear");

    $colors = [
        "red" => "#fe0202",
        "green" => "#00fc03",
        "blue" => "#0204ff"
    ];

    $people = [
        [
            "firstname" => "Zukkii",
            "lastname" => "Iem",
            "age" => 6
        ],
        [
            "firstname" => "Titann",
            "lastname" => "Iem",
            "age" => 4

        ],
        [
            "firstname" => "Kin",
            "lastname" => "Iem",
            "age" => 3

        ],
    ];

    // print_r($numbers);

    // var_dump($fruits);

    // echo $fruits[1];

    // echo $colors['green']

    // echo $people[1]["age"];
    var_dump(json_encode($people));
?>
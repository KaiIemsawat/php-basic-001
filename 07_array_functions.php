<?php
    $fruits = ["apple", "orange", "banana"];

    // Get length
    // echo count($fruits);
    // echo "  -  ";
    // var_dump(in_array("apples", $fruits));
    // echo "  -  ";
    $fruits[] = "grape"; // Add grape to fruit
    array_push($fruits, "kiwi", "pear"); // Another to add item to an array
    array_unshift($fruits, "mango"); // Add item at the front
    print_r($fruits);
    array_pop($fruits); // take the last item out
    print_r($fruits);
    array_shift($fruits); // take out the first item
    print_r($fruits);
    unset($fruits[2]); // remove item at specific inddex
    print_r($fruits);
    
    // $chunked_array = array_chunk($fruits, 2); // Split an array to smaller arrays
    // print_r($chunked_array);


    $arr1 = [1,2,3];
    $arr2 = [4,5,6];

    $arr3 = array_merge($arr1, $arr2);
    $arr4 = [...$arr1, ...$arr2];

    print_r($arr3);
    print_r($arr4);

    $a = ["green", "red", "yellow"];
    $b = ["kiwi", "apple", "pineapple"];

    $c = array_combine($a, $b); // $a will be key and $b will be value. $a and $b need to have the same length
    print_r($c);
    
    $flipped = array_flip($c); // switch keys and values of an array
    print_r($flipped);

    $keys = array_keys($c);
    print_r($keys);

    $numbers = range(10, 20);
    print_r($numbers);

    $newNumbers = array_map(function($number) {
        return "Number $number";
    }, $numbers);

    print_r($newNumbers);

    $lessThan15 = array_filter($numbers, fn($number) => $number < 15);
    print_r($lessThan15);

    $sum = array_reduce($numbers, fn($carry, $number) => $carry + $number); // to sum all numbers in an array
    var_dump($sum);
?>
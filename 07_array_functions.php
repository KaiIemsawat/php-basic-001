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
    
    $chunked_array = array_chunk($fruits, 2); // Split an array to smaller arrays
    print_r($chunked_array);
    
?>
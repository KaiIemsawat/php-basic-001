<?php

// for($x = 0; $x < 10; $x++) {
//     echo $x;
// }

// $x = 1;
// while($x <= 15) {
//     echo "Number " . $x . '<br>';
//     $x++;
// }

// $y = 11;
// do {
//     echo "Number " . $y . '<br>';
//     $y++;
// }
// while ($y < 10); 

// $posts = ['first post', 'second post', 'third post'];
// for ($x = 0; $x < count($posts); $x++) {
//     echo $posts[$x] . '<br>';
// }

// foreach($posts as $post) {
//     echo $post . "<br>";
// }

// foreach($posts as $index => $post) {
//     echo $index . "-" . $post . "<br>";
// }

$person = [
    "first_name" => 'zukk',
    "last_name" => 'titann',
    "email" => 'zuk@tann.com'
];
foreach($person as $key => $value) {
    echo "$key - $value<br>";
};


?>
<?php

/* FOR Loop */

// for (initialize; condition; increment) {
//     // Code to be executed;
// }

// for($x = 0; $x<5; $x++)
//     echo "Number " . $x . "<br/>";

/* While Loop */

// while (initialize; condition; increment) {
//     // Code to be executed;
// }

// $x = 1;

// while($x<=15)
//     echo "Number " . $x . "<br/>";
//     $x++;


/* DO WHILE LOOP */

    // $x = 1;

    // do {
    //     echo "Number " . $x . "<br/>";
    //     $x++;
    // } while ($x <= 5);


$posts = ["First Post", "Second Post", "Third Post"];

// for($x = 0; $x < count($posts); $x++) {
//     echo $posts[$x];
// }

// foreach($posts as $post) {
//     echo $post;
// }

// Normal array Loop

foreach($posts as $index => $post) {
    echo $index + 1 . " - " . $post . " <br/> ";
 }

$person = [
    "first_name" => "Rene",
    "last_name" => "Rene",
    "email_name" => "r@mail.com",
];

// Looping Associative Array

foreach($person as $key => $value) {
    echo "$key - $value <br/>";
}

?>


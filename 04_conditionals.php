<?php

/*

< Less than

> Greater than

<= less than or equal to

> Greaterthan or equal to

== Equal to

=== identical to

!= not equal to

!== Not identical to



** If statement Syntax

if(condition) {

    // Code to be executed if condition is true
}






*/


$age = 17;

// if ($age >= 18) {
//     echo "You are old enough to vote";
// } else {
//     echo "Sorry, you are not old enough to vote";
// }

// $t = date("H");


// if($t < 12) {
// echo "Good morning";

// } else if($t < 17) {
//     echo "Good Afternoon";
// }


$posts = ["First Post"];

// if (!empty($posts)) {
//     echo $posts[0];
// } else {
//     echo "No Posts";
// }
 

// echo !empty($posts) ? $posts[0] : "No posts";

// $firstPost = !empty($posts) ? $posts[0] : "No posts";

// echo $firstPost;

// Coalencing operator

// $firstPost = $posts[0] ?? null;
// echo $firstPost;

$favcolor = "red";

switch($favcolor){
    case "red":
        echo "Color is red";
        break;
    case "blue":
        echo "Color is blue";
        break;
    default:
    echo "None of the colors";
}


?>
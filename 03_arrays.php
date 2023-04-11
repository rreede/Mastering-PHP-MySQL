<?php

// Simple arrays
$numbers = [1,44,55,12];

$fruits = array("apple","orange");

// var_dump($numbers);


// echo $fruits[1];


// Assosiative array

$colors = [
    1 => "red",
    4 => "blue"

];

$hex = [
    "red" => "#f00",
    "blue" => "#f23"
];

echo $hex["blue"];

$person = [
    $first_name => "Rene",
    $email => "email@email.com"


];

// echo $person["first_name"];

$people = [

    [
        $first_name => "Rene",
        $email => "email@email.com",
    ],
    [
        $first_name => "John",
        $email => "email@email.com",
    ],
    [
        $first_name => "Juhan",
        $email => "email@email.com",
    ],



];


//echo $people[1]["email"];

// This creates json out of assosiative array

var_dump(json_encode($people));



?>
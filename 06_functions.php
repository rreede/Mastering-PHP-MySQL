<?php

function registerUser($email) {
    echo $email . "Registered";
}

registerUser("rene@mail.ee");

function sum($a, $b = 5) {
    return $a + $b;
}

$number = sum(4,5);

echo $number;

$substract = function($n1, $n2) {
    return $n1 - $n2;
};

echo $substract(10,5);

$multiply = fn($n1, $n2) => $n1 * $n2;

echo $multiply(3,3);
?>
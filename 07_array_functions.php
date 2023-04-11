<?php

$fruits = ["Apple","orange", "pear"];

// Get Length

echo count($fruits);

// Search Array

var_dump(in_array("apple", $fruits));

// Add to array

$fruits[] = "grape";
array_push($fruits, "blueberry");

// Beggining of array

array_unshift($fruits, "Mango");

// Remove from end

array_pop($fruits);

// Delete specific item
unset($fruits[2]);



// split into 2 chuncks

$chunked_array = array_chunk($fruits, 2);

print_r($chunked_array);

$arr1 = [1,2,3];
$arr2 = [4,5,6];

$arr3 = array_merge($arr1, $arr2);

$arr4= [...$arr1, ...$arr2];

print_r($arr3);


$a = ["green", "red", "yellow"];
$b = ["avocado", "apple", "banana"];

$c = array_combine($a, $b);

$keys = array_keys($c);

print_r($keys);

$flipped = array_flip($c);
print_r($flipped);


$numbers = range(1,20);

print_r($numbers);

$newNumbers = array_map(function($number) {
    return "number $number";
}, $numbers);


print_r($newNumbers);

$lessThan10 = array_filter($numbers, fn($number) => $number<= 10);

print_r($lessThan10);

$sum = array_reduce($numbers, fn($carry, $number) => $carry + $number);

var_dump($sum);

?>
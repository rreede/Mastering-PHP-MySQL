<?php


/* PHP Data Types */

/*

- String    Series of characters surrounded by quotes

- Integer   Whole Numbers

- Float     Decimal Numbers

- Boolean    True or false
 
- Array      Special varibable, which can hold more rthan one value

- Object      A class

- NULL        Empty variable

- Resource    Special variable that holds a resource



*/

/* Variable Rules */

/*

Prefixed with $

Must start with a letter or the underscore character

- cant start with number

- variables can only contain alpha-numeric characters and underscores

- variables are case-sensitive ($name and $NAME are different)


*/
$name = "Rene";

$age = 27;

$has_Kids = false;

echo $age;

echo $has_Kids;

$cash_on_hand = 20.75;

echo $name;

// var_dump($cash_on_hand);

// echo $name . "is" .  $age . "years old";

echo "$name is $age years old!";

echo 5 + 5;

define("HOST", "localhost");
define("DB_NAME", "root");




?>
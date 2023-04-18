<?php

class Product {
    public $name = "soap";




}

$product = new Product();
$anotherProduct = new Product();

$soapObject = new Product();

print $soapObject->name;


var_dump($product);
var_dump($anotherProduct);
?>
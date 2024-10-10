<?php
//TESTING REPO 

$newProduct = new Product(null, '#R123X', "Test Product", "10mL", 10, "example.url", null);

$repo = new repo();


echo $repo->save($newProduct);

die;

$updatedProduct = new Product(18, "#U123X", "Updated product", "15mL", 15, "updated.url", null);

echo "<pre>";
var_dump($repo->findById(18));
echo "</pre>";
echo "<br>";
echo "<br>";


$repo->save($updatedProduct);


echo "<pre>";
var_dump($repo->findAll());
echo "</pre>";
echo "<br>";
echo "<br>";

die;

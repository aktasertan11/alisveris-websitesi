<?php

//MySQL connections
require('database/DBController.php');
require ('database/Product.php');
require ('database/Cart.php');

//Database obj
$db = new DBController();

$product = new Product($db);
//print_r($product->getData());

$product_shuffle = $product->getData();


$Cart = new Cart($db);

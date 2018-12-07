<?php

session_start();
include 'connect.php';

$brand = $POST'brand';
$brand = $POST'model';
$brand = $POST'color';
$brand = $POST'price';
$brand = $POST'image_url';
$brand = $POST'product info';

$sql = "INSERT INTO products (brand,model,color,price,image_url,product_info)
VALUES ($brand,$model,$color,$price,$image_url,$productinfo)";







?>
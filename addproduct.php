<?php

session_start();
include 'db_connection.php';

$brand = $_POST['brand'];
$model = $_POST['model'];
$color = $_POST['color'];
$price = $_POST['price'];
$image_url = $_POST['image_url'];
$product_info= $_POST['product_info'];

echo $brand;
echo $model;
echo $color;
echo $price;
echo $image_url;
echo $product_info;

$sql = "INSERT INTO products (brand,model,color,price,image_url,product_info)
VALUES ('$brand','$model','$color','$price','$image_url','$product_info')";

$conn->exec($sql);            

echo "New record created successfully";     

$conn = null;











?>
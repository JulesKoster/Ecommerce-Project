<?php
session_start();

include 'connect.php';
include 'navbar.php';



if (empty($_SESSION['addtocart'])) {
  echo 'Your shopping cart is empty';
  header ('Refresh: 2 ; url=index.php');
} else

{

$productCustomer = implode (',' , $_SESSION['addtocart']);

$sql = "SELECT brand, model, color, price, image_url,product_info FROM products WHERE productID IN ($productCustomer)"; 
    
$data = $pdo->query($sql);     

foreach ($data as $row){
        $htmlOutput = "";         
        $htmlOutput.= '<div class="product-card">';
        // $htmlOutput .= '<a href="' . 'personpage.php?firstname=' . $row['firstname'] . '">';
        $htmlOutput.= '<img src="' . $row['image_url'] . '" alt="' . '" style="width:100%">';
        // $htmloutput.= '</a>';
        $htmlOutput.= '<h1>' . $row['brand'] . ' ' . $row['model'] . '</h1>';
        $htmlOutput.= '<p class="price">' . '<b>&euro; </b>' . $row['price'] . '</p>'; 
        $htmlOutput.= '<p>' . '<b>Color:</b>' . ' ' . $row['color'] . '</p>';
        $htmlOutput.= '<p>' . '<b>Product info:</b>' . '</p>' . $row['product_info'] . '</p>'; 
        $htmlOutput.= '</div>';
        echo $htmlOutput;
}
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Product</title>
    <meta name="description" content="Roughly 155 characters">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    </head>
<body>
</body>
</html>  
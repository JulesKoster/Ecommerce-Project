<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Product</title>
    <meta name="description" content="Roughly 155 characters">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    </head>
<body>

 
<!-- Nav Start-->
<nav>
    <div class="navbar">
    <a href="index.html">Home</a>
    <!-- <a href="#">Contact</a> -->
    <a href="register.html">Register<i class="fas fa-user-plus"></i></a>
    <a href="login.html">Login<i class="fa fa-fw fa-user"></i></a>      
    </div>
</nav>
<!-- Nav End-->

<!-- Product innfo Start -->
<?php
    include "db_connection.php";

    $productID = $_GET['id'];

    $sql = "SELECT brand, model, color, price, image_url FROM products WHERE productID='$productID'"; 
    
    $data = $conn->query($sql);     
  
     foreach ($data as $row)
    {   
        $htmlOutput = "";         
        $htmlOutput.= '<div class="product-card">';
        // $htmlOutput .= '<a href="' . 'personpage.php?firstname=' . $row['firstname'] . '">';
        $htmlOutput.= '<img src="' . $row['image_url'] . '" alt="' . '" style="width:100%">';
        // $htmloutput.= '</a>';
        $htmlOutput.= '<h1>' . $row['brand'] . ' ' . $row['model'] . '</h1>';
        $htmlOutput.= '<p class="price">' . '<b>&euro; </b>' . $row['price'] . '</p>'; 
        $htmlOutput.= '<p>' . '<b>Color:</b>' . ' ' . $row['color'] . '</p>'; 
        $htmlOutput.= '<p>Product info</p>';
        $htmlOutput.= '<p><button>Add to Cart  <i class="fas fa-cart-plus"></i></button></p>';
        $htmlOutput.= '</div>';   
        echo $htmlOutput;
    }  

    $conn = null;     
  
?>
 





</body>
</html>  


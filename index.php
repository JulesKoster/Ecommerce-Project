<?php
session_start();

include 'navbar.php' 

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Da Costa Laptopbag page</title>
    <meta name="description" content="">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    </head>
  <body>
    <!-- Nav Start
    <nav>
        <div class="navbar">
            <a href="index.php">Home</a>
            <a href="register.php">Register<i class="fas fa-user-plus"></i></a>
            <a href="login.php">Login<i class="fa fa-fw fa-user"></i></a>
        </div>
    </nav>
     Nav End-->
<!-- Main Start-->
<div class="main-container">
        <div class="container"> 
        <div class="container-top"><!--<a href="www.google.nl">--><img class ="imgproduct" src="img/plevier_man_black_white.jpg" alt=""></a>
        <div class="text-centered">Da Costa Exclusive Laptopbags</div>
        </div>  
    <div class="container">
        <div class="product-container"><a href="product.php?id=1"><img class ="imgproduct" src="img/cb_black_15.6.jpg"" alt=""></a></div>
        <div class="product-container"><a href="product.php?id=2"><img class ="imgproduct" src="img/cb_brown15.6_2.jpg"" alt=""></a></div>
        <div class="product-container"><a href="product.php?id=6"><img class ="imgproduct" src="img/cb_vivo_black_15.6.jpg"" alt=""></a></div>
        <div class="product-container"><a href="product.php?id=4"><img class ="imgproduct" src="img/cb_vivo_cognac_15.6.jpg"" alt=""></a></div>
        <div class="product-container"><a href="product.php?id=5"><img class ="imgproduct" src="img/cb_vivo_mocca_15.6.jpg"" alt=""></a></div>
        <div class="product-container"><a href="product.php?id=3"><img class ="imgproduct" src="img/plevier_dbrown_15.6.jpg"" alt=""></a></div>
                    
    </div> 
    
    <!-- <div class="container" id="bg-image">
        <div class="bg-image">
        <a href="www.google.nl"><img src="img/Castelijn_und_Beerens_marken_banner_fs18.jpg" alt=""></a> 
        <div class="bg-text"><h1>Castelijn & Beerens</h1>
        <p>Official Reseller</p>
        </div>
        </div>  
    </div> -->


        
    <div class="container">
        <div class="slideshow-wrapper">
            <!-- Slideshow container -->
            <div class="slideshow">
        
                <!-- Full-width images with number and caption text -->
                <div class="mySlides fade">
                    <div class="numbertext">1 / 4</div>
                    <img src="img/zagliani_laptop_bag_black.jpg" style="width:100%">
                    <div class="text">Zagliani Laptop Bag &#8364;2000 </div>
                </div>
        
                <div class="mySlides fade">
                    <div class="numbertext">2 / 4</div>
                    <img src="img/bottega_veneta_black.jpg" style="width:100%">
                    <div class="text">Bottega Veneta &#8364;2650</div>
                </div>
        
                <div class="mySlides fade">
                    <div class="numbertext">3 / 4</div>
                    <img src="img/lucrin_laptop_bag_black.jpg" style="width:100%">
                    <div class="text">Lucrin Laptop Bag, Real Ostrich Leather &#8364;4650</div>
                </div>
                <div class="mySlides fade">
                    <div class="numbertext">4 / 4</div>
                    <img src="img/tumi_bulletproof_briefcase_xl.jpg" style=" width:100%">
                    <div class="text">Tumi Bulletproof Laptop/Briefcase &#8364;3000</div>
                </div>
                <!-- Next and previous buttons -->
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
                </div>
            <br>
        
            <!-- The dots/circles -->
                <div style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
                <span class="dot" onclick="currentSlide(4)"></span>
                </div>             
        </div>
        </div>            
    </div>
</div>
<!-- Main End-->   
<footer>
<div class="footer-top"> </div>
<div class="footer-main"></div>
<div class="footer-bottom">
    <div class="social-media"><br>
            <span>Be sure to check out our Social Media Pages</span>
        <ul class="icons">
            <li>
                <img src="img/footer/icons/if_2018_social_media_popular_app_logo_instagram_3225191.png" width="32" height="32">
                <p><a href="https://www.instagram.com/" target="_blank">Instagram</a></p>
            </li>
            <li>
                <img src="img/footer/icons/if_2018_social_media_popular_app_logo_facebook_3225194.png" width="32" height="32">
                <p><a href="https://www.facebook.com/laptopbagscouk/" target="_blank">Facebook</a></p>
            </li>
            <li>
                <img src="img/footer/icons/if_2018_social_media_popular_app_logo_twitter_3225183.png" width="32" height="32">
                <p><a href="https://twitter.com/" target="_blank">Twitter</a></p>
            </li>
            <li>
                <img src="img/footer/icons/if_2018_social_media_popular_app_logo_youtube_3225180.png" width="32" height="32">
                <p><a href="http://www.youtube.com/" target="_blank">Youtube</a></p>
            </li>
         </ul>
            <span class="copyright">&#9400; Da Costa Exclusive</span>
    </div>    
    
</div>


</footer>




<script type="text/javascript" src="js/slider.js"></script>
</body>
</html>
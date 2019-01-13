<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Our shop</title>
    <link rel = "stylesheet"
    type = "text/css"
    href = "style.css" />
</head>
<body>
    <div id="top_bar">
    </div>
    <div id="full_body">
        
                    <div class="header">
                            <ul class="menu">
                                <li class="dropdown"><span>Mon compte</span>
                                    <ul class="features-menu">
                                        <li><a href="login.html">Se connecter</a></li>
                                        <li><a href="#">Voir mon compte</a></li>
                                        <li><a href="usr_gestion/logout_usr.php">Se deconnecter</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><span>Categories</span>
                                    <ul class="features-menu">
                                        <li><a href="#">Hallu</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><span>Mon panier</span>
                                    <ul class="features-menu">
                                        <li><a href="my_cart.php">Voir mes articles</a></li>
                                        <li><a href="#">Commander</a></li>
                                    </ul>
                                </li>
                                <?php if ($_SESSION['admin'] == 1) : ?> {
                                    <li class='dropdown'><span>Back-end</span><ul class='features-menu'><li><a href="back.html">Gestion admin</a></li></ul></li>
                                    <?php endif; ?>        
                                </ul>
                                </li>
                        </div>
    
    
    <!-- <div id="left-col">
            <a href="#">Categorie 1</a>
            <a href="#">Categorie 2</a>
            <a href="#">Categorie 3</a>
            <a href="#">Categorie 4</a>
            <a href="#">Categorie 5</a>
    </div> -->
    
    <div id="middle-col">
<!-- Slideshow container -->
<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="img/basket femme rouge.jpg" style="width:100%">
  <div class="text">basket femme rouge</div>
                                </form>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="img/doudoune femme.jpg .jpg" style="width:100%">
  <div class="text">doudoune femme</div>
                                </form>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="img/chaussures femme noir.jpg" style="width:100%">
  <div class="text">chaussures femme noir</div>
                                </form>
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
<span class="dot" onclick="currentSlide(1)"></span>
<span class="dot" onclick="currentSlide(2)"></span>
<span class="dot" onclick="currentSlide(3)"></span>
</div> 
</div>
<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="img/basket femme rouge.jpg" style="width:100%">
  <div class="text">basket femme rouge</div>
                                </form>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="img/chaussures femme beige.jpg" style="width:100%">
  <div class="text">chaussures femme beige</div>
                                </form>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="img/chaussures femme noir.jpg" style="width:100%">
  <div class="text">chaussures femme noir</div>
                                </form>
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
<span class="dot" onclick="currentSlide(1)"></span>
<span class="dot" onclick="currentSlide(2)"></span>
<span class="dot" onclick="currentSlide(3)"></span>
</div> 
</div>
<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="img/basket femme rouge.jpg" style="width:100%">
  <div class="text">basket femme rouge</div>
                                </form>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="img/chaussures femme beige.jpg" style="width:100%">
  <div class="text">chaussures femme beige</div>
                                </form>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="img/chaussures femme noir.jpg" style="width:100%">
  <div class="text">chaussures femme noir</div>
                                </form>
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
<span class="dot" onclick="currentSlide(1)"></span>
<span class="dot" onclick="currentSlide(2)"></span>
<span class="dot" onclick="currentSlide(3)"></span>
</div> 
</div>
<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="img/basket femme rouge.jpg" style="width:100%">
  <div class="text">basket femme rouge</div>
                                </form>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="img/chaussures femme beige.jpg" style="width:100%">
  <div class="text">chaussures femme beige</div>
                                </form>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="img/chaussures femme noir.jpg" style="width:100%">
  <div class="text">chaussures femme noir</div>
                                </form>
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
<span class="dot" onclick="currentSlide(1)"></span>
<span class="dot" onclick="currentSlide(2)"></span>
<span class="dot" onclick="currentSlide(3)"></span>
</div> 
</div>
<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="img/basket femme rouge.jpg" style="width:100%">
  <div class="text">basket femme rouge</div>
                                </form>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="img/chaussures femme beige.jpg" style="width:100%">
  <div class="text">chaussures femme beige</div>
                                </form>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="img/chaussures femme noir.jpg" style="width:100%">
  <div class="text">chaussures femme noir</div>
                                </form>
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
<span class="dot" onclick="currentSlide(1)"></span>
<span class="dot" onclick="currentSlide(2)"></span>
<span class="dot" onclick="currentSlide(3)"></span>
</div> 
</div>
<!--     
    <div id="right-col">
    </div> -->
    <script src="slideshow.js"></script>
    <script>
    function curDoc() {
    return document.getElementById("demo").innerHTML
    }
    </script>
    </body>
</html>                     
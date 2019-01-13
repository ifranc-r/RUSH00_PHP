<?php
session_start();
require_once('./mysql_db/connect2db.php');
function get_all_product(){
	$conn = connecte2data();
	if (!$conn)
		exit ("Connection failed: " . mysqli_connect_error());
	$sql = "SELECT * FROM products";
	// check if user exist
	if ($result = mysqli_query($conn, $sql)){
		if (mysqli_num_rows($result) > 0) {
			$all_products = mysqli_fetch_all($result, MYSQLI_ASSOC);
			return $all_products;
		} 
		else {
			echo "0 products in database\n";
			return false;
		}
	}
	else{
		echo "error\n";
		return false;
	}
	mysqli_free_result($result);
}
$all_products = get_all_product();
print_r($all_products);
$i = 0;
if (!isset($cat)) {
    $cat = 0;
}
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
                                        <li><a href="homme.php">Homme</a></li>
                                        <li><a href="femme.php">Femme</a></li>
                                        <li><a href="vestes.php">Vestes</a></li>
                                        <li><a href="chaussures.php">Chaussures</a></li>
                                        <li><a href="pull.php">Pull</a></li>
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
    </div>
    <div id="full_body">
        
                  
    
    
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
  <?php echo '<img class = "img_index" src="'.$all_products[$i]['picture'].'" alt="'.$all_products[$i]['picture'].'">';?>
  <div class="text"><?php echo '<p class="article">'.$all_products[$i]['name'].'</p>';?></div>
  <div class="form">
                        <form class="form-pict" action="cart_gestion/manage_cart.php" method="POST">
                        <input type="hidden" name="name" value="<?php echo $all_products[$i]['name'];?>">

                        <input name="id_product" type="hidden" value="<?php echo $all_products[$i]['id']; $i++;?>">
                        <input name="product_price" type="hidden" value="<?php echo $all_products[$i]['price']; $i++;?>">
                        <input id = "pict" type="submit" name="add" value ="Ajouter au panier">
                                </form>
                                </div>
</div>
                                </div>

<div class="slideshow-container">
<div class="mySlides fade">
  <?php echo '<img class = "img_index" src="'.$all_products[$i]['picture'].'" alt="'.$all_products[$i]['picture'].'">';?>
  <div class="text"><?php echo '<p class="article">'.$all_products[$i]['name'].'</p>';?></div>
  <div class="form">
                        <form class="form-pict" action="cart_gestion/manage_cart.php" method="POST">
                        <input name="name" value="<?php echo $all_products[$i]['name'];?>">
                        <input name="id_product" type="hidden" value="<?php echo $all_products[$i]['id']; $i++;?>">
                        <input name="product_price" type="hidden" value="<?php echo $all_products[$i]['price']; $i++;?>">
                        <input id = "pict" type="submit" name="add" value ="Ajouter au panier">
                                </form>
                                </div>
</div>
                                </div>

<div class="slideshow-container">
<div class="mySlides fade">
  <?php echo '<img class = "img_index" src="'.$all_products[$i]['picture'].'" alt="'.$all_products[$i]['picture'].'">';?>
  <div class="text"><?php echo '<p class="article">'.$all_products[$i]['name'].'</p>';?></div>
  <div class="form">
                        <form class="form-pict" action="cart_gestion/manage_cart.php" method="POST">
                        <input name="name" value="<?php echo $all_products[$i]['name'];?>">
                        <input name="id_product" type="hidden" value="<?php echo $all_products[$i]['id']; $i++;?>">
                        <input name="product_price" type="hidden" value="<?php echo $all_products[$i]['price']; $i++;?>">
                        <input id = "pict" type="submit" name="add" value ="Ajouter au panier">
                                </form>
                                </div>
</div>
                                </div>
                                <div class="slideshow-container">
<div class="mySlides fade">

  <?php echo '<img class = "img_index" src="'.$all_products[$i]['picture'].'" alt="'.$all_products[$i]['picture'].'">';?>
  <div class="text"><?php echo '<p class="article">'.$all_products[$i]['name'].'</p>';?></div>
  <div class="form">
                        <form class="form-pict" action="cart_gestion/manage_cart.php" method="POST">
                        <input name="name" value="<?php echo $all_products[$i]['name'];?>">
                        <input name="id_product" type="hidden" value="<?php echo $all_products[$i]['id']; $i++;?>">
                        <input name="product_price" type="hidden" value="<?php echo $all_products[$i]['price']; $i++;?>">
                        <input id = "pict" type="submit" name="add" value ="Ajouter au panier">
                                </form>
                                </div>
</div>
                                </div>

<div class="slideshow-container">
<div class="mySlides fade">
  <?php echo '<img class = "img_index" src="'.$all_products[$i]['picture'].'" alt="'.$all_products[$i]['picture'].'">';?>
  <div class="text"><?php echo '<p class="article">'.$all_products[$i]['name'].'</p>';?></div>
  <div class="form">
                        <form class="form-pict" action="cart_gestion/manage_cart.php" method="POST">
                        <input name="name" value="<?php echo $all_products[$i]['name'];?>">
                        <input name="id_product" type="hidden" value="<?php echo $all_products[$i]['id']; $i++;?>">
                        <input name="product_price" type="hidden" value="<?php echo $all_products[$i]['price']; $i++;?>">
                        <input id = "pict" type="submit" name="add" value ="Ajouter au panier">
                                </form>
                                </div>
</div>
                                </div>

<div class="slideshow-container">
<div class="mySlides fade">
  <?php echo '<img class = "img_index" src="'.$all_products[$i]['picture'].'" alt="'.$all_products[$i]['picture'].'">';?>
  <div class="text"><?php echo '<p class="article">'.$all_products[$i]['name'].'</p>';?></div>
  <div class="form">
                        <form class="form-pict" action="cart_gestion/manage_cart.php" method="POST">
                        <input name="name" value="<?php echo $all_products[$i]['name'];?>">
                        <input name="id_product" type="hidden" value="<?php echo $all_products[$i]['id']; $i++;?>">
                        <input name="product_price" type="hidden" value="<?php echo $all_products[$i]['price']; $i++;?>">
                        <input id = "pict" type="submit" name="add" value ="Ajouter au panier">
                                </form>
                                </div>
</div>
                                </div><div class="slideshow-container">
<div class="mySlides fade">

  <?php echo '<img class = "img_index" src="'.$all_products[$i]['picture'].'" alt="'.$all_products[$i]['picture'].'">';?>
  <div class="text"><?php echo '<p class="article">'.$all_products[$i]['name'].'</p>';?></div>
  <div class="form">
                        <form class="form-pict" action="cart_gestion/manage_cart.php" method="POST">
                        <input name="name" value="<?php echo $all_products[$i]['name'];?>">
                        <input name="id_product" type="hidden" value="<?php echo $all_products[$i]['id']; $i++;?>">
                        <input name="product_price" type="hidden" value="<?php echo $all_products[$i]['price']; $i++;?>">
                        <input id = "pict" type="submit" name="add" value ="Ajouter au panier">
                                </form>
                                </div>
</div>
                                </div>

<div class="slideshow-container">
<div class="mySlides fade">
  <?php echo '<img class = "img_index" src="'.$all_products[$i]['picture'].'" alt="'.$all_products[$i]['picture'].'">';?>
  <div class="text"><?php echo '<p class="article">'.$all_products[$i]['name'].'</p>';?></div>
  <div class="form">
                        <form class="form-pict" action="cart_gestion/manage_cart.php" method="POST">
                        <input name="name" value="<?php echo $all_products[$i]['name'];?>">
                        <input name="id_product" type="hidden" value="<?php echo $all_products[$i]['id']; $i++;?>">
                        <input name="product_price" type="hidden" value="<?php echo $all_products[$i]['price']; $i++;?>">
                        <input id = "pict" type="submit" name="add" value ="Ajouter au panier">
                                </form>
                                </div>
</div>
                                </div>

<div class="slideshow-container">
<div class="mySlides fade">
  <?php echo '<img class = "img_index" src="'.$all_products[$i]['picture'].'" alt="'.$all_products[$i]['picture'].'">';?>
  <div class="text"><?php echo '<p class="article">'.$all_products[$i]['name'].'</p>';?></div>
  <div class="form">
                        <form class="form-pict" action="cart_gestion/manage_cart.php" method="POST">
                        <input name="name" value="<?php echo $all_products[$i]['name'];?>">
                        <input name="id_product" type="hidden" value="<?php echo $all_products[$i]['id']; $i++;?>">
                        <input name="product_price" type="hidden" value="<?php echo $all_products[$i]['price']; $i++;?>">
                        <input id = "pict" type="submit" name="add" value ="Ajouter au panier">
                                </form>
                                </div>
</div>
                                </div><div class="slideshow-container">
<div class="mySlides fade">

  <?php echo '<img class = "img_index" src="'.$all_products[$i]['picture'].'" alt="'.$all_products[$i]['picture'].'">';?>
  <div class="text"><?php echo '<p class="article">'.$all_products[$i]['name'].'</p>';?></div>
  <div class="form">
                        <form class="form-pict" action="cart_gestion/manage_cart.php" method="POST">
                        <input name="name" value="<?php echo $all_products[$i]['name'];?>">
                        <input name="id_product" type="hidden" value="<?php echo $all_products[$i]['id']; $i++;?>">
                        <input name="product_price" type="hidden" value="<?php echo $all_products[$i]['price']; $i++;?>">
                        <input id = "pict" type="submit" name="add" value ="Ajouter au panier">
                                </form>
                                </div>
</div>
                                </div>

<div class="slideshow-container">
<div class="mySlides fade">
  <?php echo '<img class = "img_index" src="'.$all_products[$i]['picture'].'" alt="'.$all_products[$i]['picture'].'">';?>
  <div class="text"><?php echo '<p class="article">'.$all_products[$i]['name'].'</p>';?></div>
  <div class="form">
                        <form class="form-pict" action="cart_gestion/manage_cart.php" method="POST">
                        <input name="name" value="<?php echo $all_products[$i]['name'];?>">
                        <input name="id_product" type="hidden" value="<?php echo $all_products[$i]['id']; $i++;?>">
                        <input name="product_price" type="hidden" value="<?php echo $all_products[$i]['price']; $i++;?>">
                        <input id = "pict" type="submit" name="add" value ="Ajouter au panier">
                                </form>
                                </div>
</div>
                                </div>

<div class="slideshow-container">
<div class="mySlides fade">
  <?php echo '<img class = "img_index" src="'.$all_products[$i]['picture'].'" alt="'.$all_products[$i]['picture'].'">';?>
  <div class="text"><?php echo '<p class="article">'.$all_products[$i]['name'].'</p>';?></div>
  <div class="form">
                        <form class="form-pict" action="cart_gestion/manage_cart.php" method="POST">
                        <input name="name" value="<?php echo $all_products[$i]['name'];?>">
                        <input name="id_product" type="hidden" value="<?php echo $all_products[$i]['id']; $i++;?>">
                        <input name="product_price" type="hidden" value="<?php echo $all_products[$i]['price']; $i++;?>">
                        <input id = "pict" type="submit" name="add" value ="Ajouter au panier">
                                </form>
                                </div>
</div>
                                </div><div class="slideshow-container">
<div class="mySlides fade">

  <?php echo '<img class = "img_index" src="'.$all_products[$i]['picture'].'" alt="'.$all_products[$i]['picture'].'">';?>
  <div class="text"><?php echo '<p class="article">'.$all_products[$i]['name'].'</p>';?></div>
  <div class="form">
                        <form class="form-pict" action="cart_gestion/manage_cart.php" method="POST">
                        <input name="name" value="<?php echo $all_products[$i]['name'];?>">
                        <input name="id_product" type="hidden" value="<?php echo $all_products[$i]['id']; $i++;?>">
                        <input name="product_price" type="hidden" value="<?php echo $all_products[$i]['price']; $i++;?>">
                        <input id = "pict" type="submit" name="add" value ="Ajouter au panier">
                                </form>
                                </div>
</div>
                                </div>

<div class="slideshow-container">
<div class="mySlides fade">
  <?php echo '<img class = "img_index" src="'.$all_products[$i]['picture'].'" alt="'.$all_products[$i]['picture'].'">';?>
  <div class="text"><?php echo '<p class="article">'.$all_products[$i]['name'].'</p>';?></div>
  <div class="form">
                        <form class="form-pict" action="cart_gestion/manage_cart.php" method="POST">
                        <input name="name" value="<?php echo $all_products[$i]['name'];?>">
                        <input name="id_product" type="hidden" value="<?php echo $all_products[$i]['id']; $i++;?>">
                        <input name="product_price" type="hidden" value="<?php echo $all_products[$i]['price']; $i++;?>">
                        <input id = "pict" type="submit" name="add" value ="Ajouter au panier">
                                </form>
                                </div>
</div>
                                </div>

<div class="slideshow-container">
<div class="mySlides fade">
  <?php echo '<img class = "img_index" src="'.$all_products[$i]['picture'].'" alt="'.$all_products[$i]['picture'].'">';?>
  <div class="text"><?php echo '<p class="article">'.$all_products[$i]['name'].'</p>';?></div>
  <div class="form">
                        <form class="form-pict" action="cart_gestion/manage_cart.php" method="POST">
                        <input name="name" value="<?php echo $all_products[$i]['name'];?>">
                        <input name="id_product" type="hidden" value="<?php echo $all_products[$i]['id']; $i++;?>">
                        <input name="product_price" type="hidden" value="<?php echo $all_products[$i]['price']; $i++;?>">
                        <input id = "pict" type="submit" name="add" value ="Ajouter au panier">
                                </form>
                                </div>
</div>
                                </div>

    <script src="slideshow.js"></script>
    <script>
    function curDoc() {
    return document.getElementById("demo").innerHTML
    }
    </script>
    </body>
</html>                     
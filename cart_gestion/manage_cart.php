<?php
session_start();
require_once('../mysql_db/connect2db.php');
print_r($_POST);

if (!$conn) {
    $conn = connecte2data();
    exit("Connection failed: " . mysqli_connect_error());
}

$check_price = "SELECT price FROM products";
print_r($check_price);
$check_name = "SELECT name FROM products";
mysqli_close($conn);

$_SESSION["total"] = 0;
for ($i=0; $i< count($check_name); $i++) {
        $_SESSION['qty'][$i] = 0;
        $_SESSION[$check_price][$i] = 0;
    }
if (isset($_POST['submit'])  && $_POST['submit'] == "Supprimer mon panier" ){
    unset($_SESSION["qty"]);
    unset($_SESSION["amounts"]);
    unset($_SESSION["total"]); 
    unset($_SESSION["cart"]); 
}

if (isset($_POST["del"])){
    $i = $_POST["del"];
   $qty = $_SESSION["qty"][$i];
   $qty--;
   $_SESSION["qty"][$i] = $qty;

   if ($qty == 0) {
    $_SESSION[$check_price][$i] = 0;
    unset($_SESSION["cart"][$i]);
  }
  else
  {
    $_SESSION[$check_price][$i] = $check_price[$i] * $qty;
  }
}

if (isset($_POST["add"])) {
    $i = $_POST["add"];
    $qty = $_SESSION["qty"][$i];
    $qty++;
    $_SESSION["qty"][$i] = $qty;
}
$path = $_POST['page'];
header("location: $path");

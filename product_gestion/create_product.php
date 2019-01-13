<?php
require_once('../mysql_db/connect2db.php');

function create_product(){
	// connection to data
	$conn = connecte2data();
	if (!$conn) {
		exit ("Connection failed: " . mysqli_connect_error());
	}
	if ($_POST["add"] == "Ajouter un article" && $_POST["name"] && $_POST["price"] && $_POST["sexe"] && $_POST["vetement"]){
		list($name, $price, $sexe, $types) = array($_POST["name"], $_POST["price"], $_POST["sexe"], $_POST["vetement"], $_POST["describ"]);
		$insert_product = "INSERT INTO products (name, price, sexe, types, describ)
 							VALUES ('$name', '$price', '$sexe', '$types', )";
 		if (mysqli_query($conn, $insert_product)){
			echo ("product is create\n");
		}
		else
			echo ("ERROR\n");
	}
	mysqli_close($conn);
}

create_product();
?>

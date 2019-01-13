<?php
function create_tab_usr($conn)
{
	$sql = "CREATE TABLE users (
					id int unsigned NOT NULL AUTO_INCREMENT,
					login varchar(60) NOT NULL,
					password varchar(64) NOT NULL,
					admin bit(1) DEFAULT 0,
					PRIMARY KEY (`id`)
					);";
	$admin_pass = "INSERT INTO USERS (login, password, admin)
					VALUES ('admin', PASSWORD('admin'), 1)";
	$req = mysqli_query($conn, $sql);
	$req = mysqli_query($conn, $admin_pass);
	var_dump(mysqli_error($conn));
}


function create_tab_products($conn)
{
	$sql = "CREATE TABLE products (
	  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
	  `name` varchar(100) NOT NULL,
	  `price` double unsigned NOT NULL,
	  `sexe` bit(1) NOT NULL,
	  `types` varchar(50) DEFAULT NULL,
	  `picture` varchar(50) DEFAULT NULL,
	  `stock` int(10) unsigned DEFAULT 10,
	  PRIMARY KEY (`id`)
	);";
	$req = mysqli_query($conn, $sql);
	var_dump(mysqli_error($conn));
}


?>
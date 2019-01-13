<?php

require_once('../mysql_db/connect2db.php');

function field_db()
{
	$conn = connecte2data();
	if (!$conn)
		exit ("Connection failed: " . mysqli_connect_error());
	$field = "INSERT INTO products (name, price, sexe, types, stock, describ, picture)
	VALUES ('belle chaussure femme', '40', 'femme', 'chaussures','30', 'belle chaussures de sport', './img/basket femme rouge.jpg')";
	mysqli_query($conn, $field);

	$field = "INSERT INTO products (name, price, sexe, types, stock, describ, picture)
	VALUES ('belle chaussure beige', '40', 'femme', 'chaussures','30', 'belle chaussures de sport', './img/basket femme beige.jpg')";
	mysqli_query($conn, $field);
		$field = "INSERT INTO products (name, price, sexe, types, stock, describ, picture)
	VALUES ('belle chaussure femme', '40', 'femme', 'chaussures','30', 'belle chaussures de sport', './img/basket femme noir.jpg')";
	mysqli_query($conn, $field);
		$field = "INSERT INTO products (name, price, sexe, types, stock, describ, picture)
	VALUES ('belle chaussure femme', '40', 'femme', 'chaussures','30', 'belle chaussures de sport', './img/basket femme grises.jpg')";
	mysqli_query($conn, $field);

	$field = "INSERT INTO products (name, price, sexe, types, stock, describ, picture)
	VALUES ('belle chaussure homme', '40', 'homme', 'chaussures','30', 'belle chaussures', './img/chelsea homme.jpg')";
	mysqli_query($conn, $field);

	$field = "INSERT INTO products (name, price, sexe, types, stock, describ, picture)
	VALUES ('belle doudoune', '40', 'femme', 'vestes','30', 'belle chaussure de sport', './img/doudoune femme.jpg')";
	mysqli_query($conn, $field);
	$field = "INSERT INTO products (name, price, sexe, types, stock, describ, picture)
	VALUES ('doudoune', '40', 'homme', 'vestes','30', 'doudoune de sport', './img/doudoune homme.jpg')";
	mysqli_query($conn, $field);
	$field = "INSERT INTO products (name, price, sexe, types, stock, describ, picture)
	VALUES ('parka', '40', 'homme', 'vestes','20', 'parka', './img/parka homme.jpg')";
	mysqli_query($conn, $field);
	$field = "INSERT INTO products (name, price, sexe, types, stock, describ, picture)
	VALUES ('chaussure differente', '40', 'femme', 'chaussures','30', 'belle chaussure de sport', './img/basket femme.jpg')";
	mysqli_query($conn, $field);
	$field = "INSERT INTO products (name, price, sexe, types, stock, describ, picture)
	VALUES ('chaussures folle', '40', 'femme', 'chaussures','30', 'belle chaussure de sport', './img/basket femme.jpg')";
	mysqli_query($conn, $field);
	$field = "INSERT INTO products (name, price, sexe, types, stock, describ, picture)
	VALUES ('chaussures nice', '40', 'femme', 'chaussures','30', 'belle chaussure de sport', './img/basket femme.jpg')";
	mysqli_query($conn, $field);
	$field = "INSERT INTO products (name, price, sexe, types, stock, describ, picture)
	VALUES ('chaussurescozy', '40', 'femme', 'chaussures','30', 'belle chaussure de sport', './img/basket femme.jpg')";
	mysqli_query($conn, $field);
	$field = "INSERT INTO products (name, price, sexe, types, stock, describ, picture)
	VALUES ('sneakers femelle', '40', 'homme', 'chaussures','30', 'belle chaussure de sport', './img/vans femme rouge.jpg')";
	mysqli_query($conn, $field);
}
field_db();
?>
<?php

$username = "inti";
$password = "rootme";
$database = "DB_RUSH00";
$TABLE_USERS = "USERS";
$TABLE_ARTICLES = "ARTICLES";
$TABLE_CATEGORIES = "CATEGORIES";
$link_mysql = "localhost:3306";


function ft_is_null($var){
	return ($var !== NULL && $var !== FALSE && $var !== '');
}


function main(){
	// connection to data
	$conn = mysqli_connect($link_mysql, $username, $password, $database);

	// check Post correct
	if ($_POST["submit"] == "OK" && ft_is_null($_POST["login"]) && ft_is_null($_POST["passwd"])){
		// create array of user to create
		$user_array = array("login" => $_POST["login"], "passwd" => hash("whirlpool", $_POST["passwd"]));
		// SQL check line for check
		$check_pass = "SELECT * FROM $TABLE_USERS WHERE login=$user_array['login'] AND password=PASSWORD($user_array['passwd'])";
		if ($result = mysqli_query($conn, $check_pass)){
			// check if user exist
			if (mysqli_num_rows($result) == 0){
				// create user on SQL line
				$insert_user = "INSERT INTO $TABLE_USERS (login, password)
				VALUES ($user_array['login'], PASSWORD($user_array['passwd']))";
				mysqli_query($conn, $insert_user);
				header("Location: index.html");
				echo ("OK\n");
			}
			mysqli_free_result($result);
			echo ("User exist already\n");
		}
	}
	else
		echo ("ERROR\n");
}

main();
?>
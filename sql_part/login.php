<?php

function main(){
    
    session_start();
    $username_db = "inti";
	$password_db = "rootme";
	$database = "DB_RUSH00";
	$TABLE_USERS = "USERS";
	$TABLE_ARTICLES = "ARTICLES";
	$TABLE_CATEGORIES = "CATEGORIES";
	$link_mysql = "localhost:3306";
    
	$conn = mysqli_connect($link_mysql, $username_db, $password_db, $database);
	if (!$conn) {
		exit ("Connection failed: " . mysqli_connect_error());
	}
    if ($_POST['submit'] == "Se connecter" && $_POST["login"] && $_POST["password"]) {
		$_SESSION['login'] = $_POST["login"];
        $_SESSION["password"] = $_POST["password"];

		$check_admin = "SELECT * FROM $TABLE_USERS WHERE login='$login' AND admin=1";
		if ($result = mysqli_query($conn, $check_pass)){
			if (mysqli_num_rows($result) == 1){
				// set user to admin
                $_SESSION['admin'] = 1;
				echo ("User is admin\n");
			}
			else
				echo ("User is not admin\n");
		}
    	mysqli_free_result($result);
	}
	else
		echo ("ERROR\n");
	mysqli_close($conn);
}

main();
?>
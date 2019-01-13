<?php
function ft_is_null($var){
	return ($var !== NULL && $var !== FALSE && $var !== '');
}


function main(){
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
    if (isset($_POST['login']) && isset($_POST['oldpw']) && isset($_POST['newpw']) && isset($_POST['modif']) && $_POST['modif'] == "Modifier son mot de passe") {
		list($login, $oldpw, $newpw) = array($_POST["login"], $_POST["newpw"], $_POST["newpw"]);
		// SQL check line for check
		$check_pass = "SELECT * FROM $TABLE_USERS WHERE login='$login' AND password=PASSWORD('$oldpw')";
		// check if user exist
		if ($result = mysqli_query($conn, $check_pass)){
			if (mysqli_num_rows($result) == 0){
				// create user on SQL line
				$insert_user = "INSERT INTO USERS (firstname, lastname, email, login, password, admin)
							VALUES ('firstname','lastname','email','$login', PASSWORD('$password'), 0)";
				// apply SQL line on database
				if (mysqli_query($conn, $insert_user)){
					echo ("User is create\n");
					// send user to home page
					// header("Location: index.html")
				}
				else
					echo ("ERROR\n");
			}
			else
				echo ("User exist already\n");
		}
		// free sql result
    	mysqli_free_result($result);
	}
	else
		echo ("ERROR\n");
	//close connect mysql
	mysqli_close($conn);
}

main();
?>
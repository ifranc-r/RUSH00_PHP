<?php
$username = "inti";
$password = "rootme";
$database = "DB_RUSH00";
$TABLE_USERS = "USERS";
$TABLE_ARTICLES = "ARTICLES";
$TABLE_CATEGORIES = "CATEGORIES";




$conn = mysqli_connect("localhost:3306", $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$password = hash("whirlpool", "rootme");

// create user
// $insert_user = "INSERT INTO USERS (firstname, lastname, email, login, password, admin)
// VALUES ('root','root','root@root','root', '$password', 1)";

//modify
// $modify = "UPDATE users
// 			SET password=PASSWORD('rootme')
// 			WHERE login='franc-r'";

// check_password
$check_pass = "SELECT * FROM users
			WHERE login='franc-r' AND password=PASSWORD('rootmeewww')";



if (mysqli_query($conn, $check_pass)) {
    echo "pass is good";
} else {
    echo "Error: " . $modify . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
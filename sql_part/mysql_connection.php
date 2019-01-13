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
// $password = hash("SHA256", "rootme");

// create user
$insert_user = "INSERT INTO USERS (firstname, lastname, email, login, password, admin)
VALUES ('root','root','root@root','root', PASSWORD('root'), 1)";
mysqli_query($conn, $insert_user);
// modify
// $modify = "UPDATE users
// 			SET password=PASSWORD('toto')
// 			WHERE login='titi'";
// mysqli_query($conn, $modify );

// check_password
// $check_pass = "SELECT * FROM users WHERE login='franc-r' AND password=PASSWORD('root33mew')";
// $result = mysqli_query($conn, $check_pass);

// if (mysqli_num_rows($result) > 0){
//     echo "pass is good";
// }

// Select_usr
$check_pass = "SELECT * FROM users WHERE login='titi' AND password=PASSWORD('toto')";

// echo gettype($row)."\n";
if ($result = mysqli_query($conn, $check_pass)){
	echo mysqli_num_rows($result);
    if (mysqli_num_rows($result) !== 0){
    	$row = mysqli_fetch_assoc($result);
    	print_r($row);
    	echo "pass is good";
    }
    else
    	echo "Error: " . mysqli_error($conn);
    mysqli_free_result($result);
}



// if (mysqli_query($conn, $check_pass)) {
//     echo "pass is good";
// } else {
//     echo "Error: " . $modify . "<br>" . mysqli_error($conn);
// }

mysqli_close($conn);
?>
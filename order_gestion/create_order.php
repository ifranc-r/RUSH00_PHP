<?

function create_product(){
	// connection to data
	$conn = connecte2data();
	if (!$conn)
		exit ("Connection failed: " . mysqli_connect_error());
	print_r($_POST);
	if ($_POST["submit"] == "Ajouter une comande"){
		session_start();
		$usr = $_SESSION['login'];
		$array_shop_card = get_products_shop_card();
		for ($array_shop_card as $products){
			
		$insert_product = "INSERT INTO orders (user, id_product)
 							VALUES ('$usr', '$products['id']')";
 		if (!mysqli_query($conn, $insert_product)){
			echo ("ERROR\n");
	}
	mysqli_close($conn);
}
create_product();

?>
<?php
if ($_POST['submit'] === "OK" && $_POST['passwd'] && $_POST['login']) {
    $values = array("login" => $_POST['login'],
                    "passwd" => hash("whirlpool", $_POST['passwd']));
   
					//Get information from fetch SQL to check if user already exists.
        foreach ($check as $elem) {
            if ($elem["login"] === $_POST["login"]) {
                $file_check = TRUE;
            }
        }
        if ($file_check === FALSE){
            $to_add = unserialize(file_get_contents($dir.'passwd'));
            $to_add[] = $values;
            $to_add = serialize($to_add);
            file_put_contents($dir.'passwd', $to_add);
            echo "OK\n";
        }
        else {
            echo "ERROR\n";
        }
    }
else {
    echo "ERROR\n";
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<title>Creer un compte</title>
        <link rel = "stylesheet"
        type = "text/css"
        href = "form.css" />
	</head>
	<body>
		<div class="login-page">
			<div class="form">
				<form class="login-form" action="create.php" method="POST">
					<p>Nom d'utilisateur : </p><input type="text" name="login"/>
					<p>Mot de passe : </p><input type="password" name="password"/>
					<input id = "login" type="submit" name="create" value ="Creer un compte">
				</form>
			</div>
		</div>
	</body>
</html>



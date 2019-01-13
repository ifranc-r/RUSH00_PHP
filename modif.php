<?php
if ($_POST['login'] && $_POST['oldpw'] && $_POST['newpw'] && $_POST['submit'] && $_POST['submit'] == "Modifier son mot de passe") {
    $values = array("login" => $_POST['login'],
                    "oldpw" => hash("whirlpool", $_POST['oldpw']),
                    "newpw" => hash("whirlpool", $_POST['newpw']));
    print_r($values);
//get info from SQL
    foreach ((array)$check as $elem) {
        if ($elem["login"] === $_POST["login"]) {
            $file_check = true;
        }
    }
   
        // $old = get info from SQL to check
        if ($old) {
            foreach ($old as $key=>$val) {
                if ($val['passwd'] === $values['oldpw']) {
                    $old[$key]['passwd'] = $values['newpw'];
                    
                    // put new content to SQL
                    echo "OK\n";
                } else {
                    echo "ERROR\n";
                }
            }
        }
    } else {
        echo "ERROR\n";
    }
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<title>Changer son mot de passe</title>
        <link rel = "stylesheet"
        type = "text/css"
        href = "form.css" />
	</head>
	<body>
		<div class="login-page">
			<div class="form">
				<form class="login-form" action="modif.php" method="POST">
					<p>Ancien mot de passe : </p><input type="text" name="oldpw"/>
					<p>Nouveau mot de passe : </p><input type="password" name="newpw"/>
					<input id = "login" type="submit" name="modif" value ="Modifier son mot de passe">
					<p class="message">Pas encore de compte ?  <a href="create.html">Creer un compte</a></p>
				</form>
			</div>
		</div>
	</body>
</html>
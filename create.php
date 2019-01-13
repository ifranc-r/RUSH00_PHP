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
				<form class="login-form" action="sql_part/create_usr.php" method="POST">
					<p>Nom d'utilisateur : </p><input type="text" name="login"/>
					<p>Mot de passe : </p><input type="password" name="password"/>
					<input id = "login" type="submit" name="create" value ="Creer un compte">
				</form>
			</div>
		</div>
	</body>
</html>



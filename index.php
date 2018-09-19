
<!DOCTYPE html>
<html lang="se">
<head>
	<meta charset="utf-8">
	<link href="https://fonts.googleapis.com/css?family=New+Rocker" rel="stylesheet">
	<title>Shh hemligt</title>
	<style type="text/css">
		html{
			background-image: url(bg.jpg);
			background-size: 95%;
			background-repeat: true;
		}
		main{
			width: 80%;
			margin: 0px auto;
		}
		body{
			font-family: 'New Rocker', cursive;
		}

	</style>
</head>
<body>
<main>
	<h1> Vilkommen </h1>
	<form action="login.php" method="POST">
		<fieldset>
			<legend>Logga in</legend>
			<p>
				<label for="username">Användernamn: </label>
				<input type="text" name="username" id="username" autocomplete="off">
			</p>
			<p>
				<label for="password">Lösenord: </label>
				<input type="password" name="password" id="password" autocomplete="off">
			</p>
			<p>
				<input type="submit" name="submit" id=submit value="Logga in">
			</p>
		</fieldset>
	</form>
</main>
</body>
</html>
<?php
session_start();
if(isset($_POST['submit'])){

	$loginCredentials = [
		"username" => "benjamin", 
		"password" => password_hash("123", PASSWORD_DEFAULT)
	];
	echo $loginCredentials['password'];

	if (isset($_POST['username']) && isset($_POST['password'])) 
	{
		$username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
		$password = $_POST['password'];

		if($username == $loginCredentials['username']
			&& password_verfiy($password, $loginCredentials['password']))
		{
			echo "<h1> hello my man </h1>";
		}
		elseif ($username != $loginCredentials['username']
			|| $password != $loginCredentials['password'])
		{
			echo "<h1> DU HAR FEL</h1>";
		}
		else
		{
			echo "<h1>FEEEL</h1>";
		}
	}
}
else
{
	echo "<h1> VARFÖR ÄR DU HÄR? </h1>";
}

?>







		

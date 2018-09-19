<?php
session_start();
if(isset($_POST['sumbit'])){

$loginCredentials = [
"username" => "benjamin", 
"password" => "123"
];

if (isset($_POST['username']) && isset($_POST['password'])) {
	$username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
	$password = md5($_POST['password']);

	echo $password;

	if($username == $loginCredentials['username']
		&& $password == md5($loginCredentials['password'])){
		echo "<h1> hello my man </h1>";
	}
	elseif ($username != $loginCredentials['username']
		|| $password != $loginCredentials['password']){
		echo "<h1> DU HAR FEL</h1>";
		}
	}
}

?>
<?php

	$adress = "localhost";
	$user = "root";
	$password = "";
	$database = "register";
	
	$dbc = mysqli_connect($adress,$user,$password,$database);

	$username = $_POST['usernm'];
	$password = $_POST['pwd'];
	
	$insert = "INSERT INTO users (Username, Password) VALUES ('$username', '$password');";
	
?>

<?php

	$adress = "localhost";
	$user = "root";
	$password = "";
	$database = "register";
	
	$dbc = mysqli_connect($adress,$user,$password,$database);
	
	$username = $_POST['username']
	$password = $_POST['pwd']
	
	$select = "SELECT username,password FROM data WHERE username='$username' AND password='$password';"
	
	
	
?>
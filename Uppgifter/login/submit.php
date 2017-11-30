<?php

	$adress = "localhost";
	$user = "root";
	$password = "";
	$database = "register";

	$dbc = mysqli_connect($adress,$user,$password,$database);

	$username = $_POST['username'];
	$password = $_POST['pwd'];
	
	$insert = "INSERT INTO data (användarnamn, namn, email, date, password) VALUES ('$username', '$fullName', '$email', '$date', '$password');";
	
	if(mysqli_query($dbc, $insert)){
		echo "Success!";
	}
	else{
		echo mysqli_error($dbc);
		echo '<br>';
		echo "Error!";
	}
	
	

?>
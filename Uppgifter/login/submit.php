<?php

	$adress = "localhost";
	$user = "root";
	$password = "";
	$database = "register";
	
	$dbc = mysqli_connect($adress,$user,$password,$database);

	$username = $_POST['usrnm'];
	$password = $_POST['pwd'];
	
	$insert = "INSERT INTO users (Username, Password) VALUES ('$username', '$password');";
	
	if(mysqli_query($dbc, $insert)){
		
		echo "You have successfully logged in.";
		
	}
	else{
		
		echo "Somethin went wrong. SQL error code:";
		echo '<br>';
		echo mysqli_error($dbc);
		
	}
	
?>

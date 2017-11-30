<?php

	$adress = "localhost";
	$user = "root";
	$password = "";
	$database = "register";
	
	$dbc = mysqli_connect($adress,$user,$password,$database);
	
	if(isset($_POST['username']) && isset($_POST['pwd'])){
	
		$username = $_POST['username'];
		$password = $_POST['pwd'];
		
		$select = "SELECT username,password FROM data WHERE username='$username' AND password='$password';";
		$result = mysqli_query($dbc,$select);
		
		if(mysqli_fetch_array($result)){
			
			echo "You have successfully logged in as: $username";
			
		}
		else{
			
			echo "Error";
			
		}
	}
	else{
		
		echo "Please try again.";
		
	}
	
?>

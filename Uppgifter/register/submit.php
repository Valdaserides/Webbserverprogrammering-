<?php

	$adress = "localhost";
	$user = "root";
	$password = "";
	$database = "register";

	$dbc = mysqli_connect($adress,$user,$password,$database);

	$username = $_POST['username'];
	$fullName = $_POST['name'];
	$email = $_POST['email'];
	$date = $_POST['date'];
	$password = $_POST['pwd'];
	
	$insert = "INSERT INTO data (username, namn, email, date, password) VALUES ('$username', '$fullName', '$email', '$date', '$password');";
	
	if(mysqli_query($dbc, $insert)){
		echo "Success!";
		echo "<br>";
		echo "Please go the <a href='../login/login.php'> login </a> page.";
	}
	else{
		echo mysqli_error($dbc);
		echo '<br>';
		echo "Error!";
	}
	
	

?>
<?php

	$adress = "localhost";
	$user = "root";
	$password = "";
	$database = "register";

	$dbc = mysqli_connect($adress,$user,$password,$database);

	if($_POST['username'] != NULL && $_POST['name'] != NULL && $_POST['email'] != NULL && $_POST['date'] != NULL && $_POST['pwd'] != NULL){
		
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
	}
	else{
		
		echo "Please fill out the form";
		
	}
	

?>
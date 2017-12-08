<?php

session_start();

if(!isset($_SESSION['loggedIn'])){
	$_SESSION['loggedIn'] = false;
}
if(isset($_POST['logout'])){
	session_unset();
	session_destroy();
	$_SESSION['loggedIn'] = false;
}
else if(isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password'])){
	
	//användare vill registrera sig
	
	$dbc = mysqli_connect("localhost", "root", "", "mySite");
	
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	
	$insert = "INSERT INTO users (username, mail, password) VALUES ('$username', '$email', '$password');";
	
	if(mysqli_query($dbc, $insert)){
		echo "Du är nu registrerad.";
	}
	else{
		echo "Något gick fel.";
	}
	
	
}
else if(isset($_POST['username']) && isset($_POST['password'])){
	
	//användare vil logga in
	
	$dbc = mysqli_connect("localhost", "root", "", "mySite");
	
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	$select = "SELECT * FROM users WHERE username = '$username' AND password = '$password';";
	
	$result = mysqli_query($dbc,$select);
	
	if(mysqli_fetch_array($result)){
		echo "Du är nu inloggad som $username.";
		$_SESSION['loggedIn'] = true;
		$_SESSION['username'] = true;
	}
	else{
		echo "Du skrev in fel uppgifter.";
		$_SESSION['loggedIn'] = false;
	}
	
	
	
}


?>

<!doctype html>
<html>
<head>

	<link rel="stylesheet" href="css.css">

	<title> hello </title>
	
</head>

<body>

<?php

if(!$_SESSION['loggedIn']){
	?>
	
	<br>
	registrerings-formulär
	<form method="POST" action="index.php">

		Användarnamn: <input type="text" name="username">
		<br>
		E-mail: <input type="text" name="email">
		<br>
		Lösenord: <input type="password" name="password">
		<br>
		<input type="submit" name="submit" value="registrera">

	</form>
	
	<br><br><br><br>
	
	login-formulär:
	<form method="POST" action="index.php">

		Användarnamn: <input type="text" name="username">
		<br>
		Lösenord: <input type="password" name="password">
		<br>
		<input type="submit" name="submit" value="logga in">

	</form>

<?php
}
else{
	echo "välkommen till sidan " . $_SESSION['username'] . "!";
	
	?>
	
	<form method="POST" action="index.php">

		<input type="submit" name="logout" value="log out">

	</form>
	
	<?php
}
?>

	
</body>
</html>
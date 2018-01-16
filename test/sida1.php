<?php

session_start();

if(!isset($_SESSION['loggedIn'])){
	
	$_SESSION['loggedIn'] = false;
	header("Location:index.php");
	
}
if(!$_SESSION['loggedIn']){
	header("Location:index.php");
}

echo "Välkommen till sida 1" . $_SESSION['username'];

?>
<br>
<a href="sida1.php"> sida 1 </a>
<a href="sida2.php"> sida 2 </a>
<a href="sida3.php"> sida 3 </a>

<br>
<form method="POST" action="index.php">

		<input type="submit" name="logout" value="logga ut">

</form>

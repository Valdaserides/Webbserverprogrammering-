<style>
.formulär{
	
	clear: both;
	width: 300px;
	text-align: center;
	margin:auto;
	
}
.formulär input{
	
	clear: both;
	width: 100%;
	
}

</style>
<div class="formulär">

	<h1> Register page </h1>

	<form method="POST" action="submit.php">

		Användarnamn: <input type="text" name="username">
		<br>
		Namn: <input type="text" name="name">
		<br>
		E-mail: <input type="text" name="email">
		<br>
		Födelsedatum (YYYYMMDD): <input type="text" name="date">
		<br>
		Lösenord: <input type="password" name="pwd">
		<br>
		<input type="submit" name="submit">

	</form>
	
	<h3> Login <a href="../login/login.php"> here. </a> </h3>
	
</div>
	
<?php

	
	

?>






























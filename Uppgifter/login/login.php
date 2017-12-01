<!doctype html>

<html>
<head>
	
	<meta charset="utf-8">
	
	<title> Login </title>
	
	<style>

	.formulär{
		
		clear: both;
		width: 300px;
		text-align: center;
		margin: auto;
		
	}
	.formulär input{
		
		clear: both;
		width: 100%;
		
	}
	
	</style>

</head>

<body>

	<div class="formulär">

		<h1> Login page </h1>
	
		<form action="submit.php" method="POST">
			
			Username: <input type="text" name="username">
				
			Password: <input type="password" name="pwd">
				
			<input type="submit">
				
		</form>	
		
		<h3> Register <a href="../register/register.php"> here. </a> </h3>
			
	</div>

</body>
</html>
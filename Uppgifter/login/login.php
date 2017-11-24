<!DOCTYPE html>
<html>

	<head>
	
		<title> Login page </title>
	
		<style>
		
		.login{
			
			clear: both;
			width: 300px;
			text-align: center;
			
		}
		
		.login input{
			
			clear: both;
			width: 100%;
			
		}
		 
		</style>
	
	</head>
	
	<body>
	
		<div class="login">
		
			<form action="submit.php" method="POST">
		
				Username: <input type="text" name="usrnm">
				<br>
				Password: <input type="password" name="pwd">
				<br>
				<input type="submit">
				
			</form>
			
		</div>	
		
	</body>
	
</html>
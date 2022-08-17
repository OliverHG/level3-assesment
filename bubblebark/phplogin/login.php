<!DOCTYPE html>
<html>
<?php
session_start();

?>	

	<head>
		<meta charset="utf-8">
		<title>Login</title>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
		<link href="style.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<div class="login">
			<h1>Login</h1>
			<form action="http://localhost/phplogin/authenticate.php" method="post">
				<label for="username">
					<i class="fas fa-user"></i>
				</label>
				<input type="text" name="username" placeholder="Username" id="username" required>
				<label for="password">
					<i class="fas fa-lock"></i>
				</label>
				<input type="password" name="password" placeholder="Password" id="password" required>
										<?php
											if(isset ($_SESSION['message'])){
											print_r ($_SESSION['message']);}

										?>
				<input type="submit" value="Login">
			</form>
			 
			 <a href="register.html"><h1>Create an Account</h1></a>
		</div>
	</body>
</html> 



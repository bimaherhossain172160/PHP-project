
<!DOCTYPE html>
<html>
<head>
	<title>BookMesh</title>
</head>
<body>
	<h1>Welcome To BookMesh</h1>

	<h3>SignUp</h3>
	<form action="connect.php" method="post">

		
		First Name: <input type="text" name="firstname" placeholder="First Name">
		Last Name: <input type="text" name="lastname" placeholder="Last Name"><br><br>
		Email: <input type="text" name="email" placeholder="Email"><br><br>
		Password: <input type="password" name="password" placeholder="Password"><br><br>
		Retype Password: <input type="password" name="rpassword" placeholder="Retype password"><br><br>
		<input type="submit" name="submit" value="Sign Up">
			
	</form>

	<br><br><br>

	<h3>Login</h3>
	<form action="dashboard.php" method="post">

		
		Email : <input type="text" name="lmail" placeholder="Email"><br><br>
		Password: <input type="password" name="lpass" placeholder="Password"><br><br>
		
		<input type="submit" name="lsubmit" value="Login">

	</form>

</body>
</html>
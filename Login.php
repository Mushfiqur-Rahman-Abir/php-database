<?php include("Server.php");?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<h1>Login</h1>

	<form method="POST"  action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>">

		<fieldset><legend>User Account Information</legend>
		<p>
			<label for="username">Username</label>
			<input type="text" name="username" id="username" value="<?php echo $uname ?>">
			<p><?php echo $usernameErr; ?></p>
			<br>

			<label for="Password">Password</label>
			<input type="password" name="pass" id="pass" value="<?php echo $pass?>">
			<p><?php echo $passwordErr; ?></p>
			<br>

		</p>
		</fieldset>

		<input type="submit" value="Submit">Login
		<br>
		<p>Not registered? <a href="RegistrationForm.php">Register</a></p>
	</form>

</body>
</html>
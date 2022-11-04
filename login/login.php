	<?php include('server.php') ?>
	<!DOCTYPE html>
	<html>
	<head>
	<title>Login to IPS</title>
	<link rel="stylesheet" type="text/css" href="style2.css">
	<link rel="icon" href="../phpPagesForUsers/images/logo.ico">
	</head>
	<body>
	<div class="account-page">
	<div class="col-2">
	<div class="header">
		<h2>Login</h2>
	</div>
		
	<form method="post" action="../login/login.php">
		<?php include('errors.php'); ?>
		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" >
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
	

		<div class="input-group">
			<button type="submit" class="btn" name="login_user">Login</button>
			<br>
			<br>
			<a href="../htmlForGuest/index.html" class="btn">Explore Now as Guest &#127808;</a>
		</div>


		<p>
			Not yet a member? <a href="register.php">Sign up</a>
		</p>
	</form>
	</div>
	</div>
	</body>
	</html>
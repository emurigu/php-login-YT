<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="description" content="A simple php login system using MySQLi.">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login System</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>
	<header>
		<nav class="navbar navbar-expand-md navbar-dark bg-dark">
			<a class="header-logo" href="index.php">
				<img class="navbar-brand" src="img/logo.png" alt="logo">
			</a>
			<ul class="navbar-nav mr-auto">
				<li class="nav-item">
					<a class="nav-link" href="index.php">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Portfolio</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">About Me</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Contact</a>
				</li>
			</ul>
			<div class="btn-group btn-toolbar header-login">
				<?php
					if (isset($_SESSION['userId'])) {
						echo '<form class="form-inline my-2 my-lg-0" action="includes/logout.inc.php" method="post">
						<button class="btn btn-outline-danger my-2 my-sm-0" type="submit" name="Logout-Submit">Logout</button>
					</form>';
					} else {
						echo '<form class="form-inline my-2 my-lg-0" action="includes/login.inc.php" method="post">
						<input class="form-control mr-sm-2" type="text" name="mailuid" placeholder="Username/E-mail">
						<input class="form-control mr-sm-2" type="password" name="pwd" placeholder="Password">
						<button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="Login-Submit">Login</button>
						<a href="signup.php">Signup</a>
					</form>';
					}
				?>
			</div>
		</nav>
	</header>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Title Here</title>
</head>	

<body>
<header>
	<nav>
		<div class="main-wrapper">
			<ul>
				<li><a href="index.php">HOME</a></li>
				<li><a href="thing1.php">THING01</a></li>
				<li><a href="thing2.php">THING02</a></li>
				<li><a href="thing3.php">THING03</a></li>
			</ul>
	       		<div class="login">
				<form  action="includes/access.php" method="POST">
					<input type="email" name="studentEmail" placeholder="Email">
					<input type="password" name="studentPassword" placeholder="Password">
					<button type="submit" name="login">Login</button>
				</form>
				<a href="signUp.php">Sign Up</a>
			</div>
		</div>
	</nav>
		
</header>

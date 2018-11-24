<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Title Here</title>
</head>	

<body>
<header>
		<div class="wrapper-header">
			<nav class="navigation-menu">
		    		<div class="navigation">
				<ul>
					<li><a href="index.php">HOME</a></li>
					<li><a href="thing1.php">THING01</a></li>
					<li><a href="thing2.php">THING02</a></li>
				</ul>
		   		</div>
				<div class="login">
					<form class="access" action="includes/access.php" method="POST">
						<input type="email" name="studentEmail" placeholder="Email">
						<input type="password" name="studentPassword" placeholder="Password">
						<button type="submit" name="login">login</button>
					</form>
					
					<li><a href="signUp.php">Sign Up</a></li>
		   		</div>
			</nav>
		</div>
</header>

<?php include_once "header.php"; ?>

<div class="container-signUp">
	<div class="wrapper-signUp">
			<form  class="signup-form" action="includes/signUpDb.php" method="POST">
				<input type="text" name="studentFirstName" placeholder="First Name">
				<input type="text" name="studentLastName" placeholder="Last Name">
				<input type="text" name="studentMajor" placeholder="Major">
				
				<input type="email" name="studentEmail" placeholder="Email">
				<input type="password" name="studentPassword" placeholder="Password">
				<input type="text" name="studentJob" placeholder="Job">
				<button type="submit" name="signUp">Sign Up</button>
			</form>
	</div>

</div>

<?php include_once "footer.php"; ?>

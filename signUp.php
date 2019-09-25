<?php
$title = "Sign up Page";
$bodyId = 'id="signUp"';
include("templates/partials/header.php");
?>
<div class="wrapper d-flex flex-row justify-content-center align-items-center">
	<div class="login">
		<h1>Sign Up</h1>
		<p>Already have an account? <a href="index.php">Login</a></p>

		<form method="post" action="processSignup.php">
			<div class="fieldset">
				<label>User Name</label>
				<input type="text" name="strUserName" value="" placeholder="You will need user name when you login." /><br />
			</div>

			<div class=" fieldset">
				<label>Password</label>
				<input type="password" name="strPassword" value="" /><br />
			</div>

			<div class="fieldset">
				<label>First Name</label>
				<input type="text" name="strFirstName" value="" /><br />
			</div>

			<div class="fieldset">
				<label>Last Name</label>
				<input type="text" name="strLastName" value="" /><br />
			</div>

			<div class="fieldset">
				<label>Email Address</label>
				<input type="text" name="strEmail" value="" /><br />
			</div>

			<div class="fieldset">
				<input type="submit" value="Sign Up" class="btn btnPositive" />
			</div>
		</form>
	</div>
</div>
<?php include("templates/partials/footer.php"); ?>
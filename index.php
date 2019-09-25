<?php
$title = "Login Page";
$bodyId = 'id="loginPage"';
include("templates/partials/header.php");
?>
<div class="wrapper d-flex flex-row justify-content-center align-items-center">
	<div class="login">
		<h1>Login</h1>
		<p>Don't have an account? <a href="signUp.php">Sign up</a></p>

		<?= showMsg('error', 'error', 'Login Error', 'There was a problem with your login details.') ?>

		<?= showMsg('success', 'success', 'Logged You Out', 'You have logged out of the CMS.') ?>

		<form method="post" action="processLogin.php">
			<div class="fieldset">
				<label>User Name</label>
				<input type="text" name="strUserName" value="" /><br />
			</div>

			<div class="fieldset">
				<label>Password</label>
				<input type="password" name="strPassword" value="" /><br />
			</div>
			<div class="fieldset">
				<input type="submit" value="Login" class="btn btnPositive" />
			</div>
		</form>
	</div>
</div>
<?php include("templates/partials/footer.php"); ?>
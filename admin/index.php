<?php
$title = "Login Page";
include("partials/header.php");
?>

<body id="loginPage">

	<div class="wrapper d-flex flex-row justify-content-center align-items-center">
		<div class="login">
			<h1>Login to Your CMS</h1>

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
	<div class="wrapper d-flex flex-row justify-content-center align-items-center flex-grow-1 gbGradient">
		<div class="intro">
			<h1>Welcome to Tak CMS</h1>
			<p>Tak CMS allows you to update all content on your website. To get an account, please send your admin an email at lorem&commat;ipsum.com</p>
			<p>If you forgot your password, <a href="#">have it reset</a></p>
		</div>
	</div>
	<?php include("partials/footer.php"); ?>
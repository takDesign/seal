<?php
$title = "Dashboard";
$dashActive = "active";
$bodyId = 'id="dashboard"';
include("partials/navbar.php");
?>
<main class="inner clearfix">
	<h1>Dashboard</h1>
	<?= showMsg('success', 'success', 'Login Success', 'Welcome back to your cms!') ?>
	<p>Hello <?= $_SESSION["userName"] ?>, What would you like to do today?</p>
	<p><a href="users.php">Check or Delete Users</a></p>
	<p><a href="pages.php">Edit or See Suggestions</a></p>
</main>
<?php include("partials/footer.php"); ?>
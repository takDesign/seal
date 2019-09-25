<?php
$title = "Users";
$usersActive = "active";
$bodyId = 'id="contact"';
include("partials/navbar.php");
?>
<main class="inner clearfix">
	<h1>Users</h1>
	<?= showMsg('deleted', 'success', 'User Removed', 'Selected user was deleted') ?>
	<p>You can see and delete users below.</p>

	<div class="list">
		<div class="d-table listHead">
			<div class="d-table-cell">First Name</div>
			<div class="d-table-cell">Last Name</div>
			<div class="d-table-cell">Email Address</div>
			<div class="d-table-cell">User Name</div>
			<div class="d-table-cell">Points</div>
			<div class="d-table-cell">Delete</div>
		</div>
		<?= buildUsersTable() ?>
	</div>
</main>
<?php include("partials/footer.php"); ?>
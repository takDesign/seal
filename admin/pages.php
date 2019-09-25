<?php
$title = "Pages";
$pagesActive = "active";
$bodyId = 'id="pages"';
include("partials/navbar.php");
?>
<main class="inner clearfix">
	<h1>Suggestions</h1>
	<?= showMsg('success', 'success', 'Suggestion Updated', 'We successfully updated a suggestion for you.') ?>

	<?= showMsg('deleted', 'success', 'Suggestion Removed', 'Suggestion was deleted') ?>
	<p>Click on the name of the title you would like to edit from the list below.</p>

	<div class="list">
		<div class="d-table listHead">
			<div class="d-table-cell">Title</div>
			<div class="d-table-cell">Posted Date</div>
			<div class="d-table-cell">User Name</div>
			<!-- <div class="d-table-cell">Voted</div> -->
			<div class="d-table-cell">Delete</div>
		</div>
		<?= buildTable() ?>
	</div>
</main>
<?php include("partials/footer.php"); ?>
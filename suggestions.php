<?php
$homeActive = "active";
$bodyId = 'id="suggestions"';
?>
<?php include("templates/partials/header.php"); ?>
<!-- body section -->
<main class="inner">
	<h2>Suggestions</h2>
	<p>Click a title of suggestions to see detail.</p>
	<div class="list">
		<div class="d-table listHead">
			<div class="d-table-cell">Title</div>
			<div class="d-table-cell">Date</div>
			<div class="d-table-cell">Proposer</div>
			<div class="d-table-cell">Voted</div>
			<div class="d-table-cell">Vote</div>
		</div>
		<?= buildList(); ?>
	</div>
</main>
<?php include("templates/partials/footer.php"); ?>
<?php
$homeActive = "active";
$bodyId = 'id="suggestions"';
?>
<?php include("templates/partials/header.php"); ?>
<!-- body section -->
<main class="inner suggestion">
	<h2>Suggestions</h2>
	<p>Click a title of suggestions to see detail.</p>
	<div class="list">
		<?= buildList(); ?>
	</div>
</main>
<?php include("templates/partials/footer.php"); ?>
<?php
$title = "Suggestion Form";
$pagesActive = "active";
$bodyId = 'id="suggestionForm"';
include("templates/partials/header.php");

$nPageID = "";
$page["strTitle"] = "";
$page["strContent"] = "";
$page["dPosted"] = "";
$page["nUsersID"] = "";

?>
<main>
	<h1>Make a Suggestion</h1>

	<p>Complete the form below to make the suggestion.</p>

	<form method="post" action="savePage.php" enctype="multipart/form-data">
		<!-- Don't fotrget enctype="multipart/form-data" -->
		<div class="fieldset">
			<label>Title of the Suggestion</label>
			<input type="text" name="strTitle" value="<?= $page['strTitle'] ?>">
		</div>

		<div class="fieldset">
			<label>Content</label>
			<textarea name="strContent"><?= $page['strContent'] ?></textarea>
		</div>

		<div class="fieldset">
			<input type="submit" value="Submit" class="btn btnPositive">
			<a href="suggestions.php" class="btn btnNegative">Cancel</a>
		</div>
	</form>
</main>
<?php include("templates/partials/footer.php") ?>
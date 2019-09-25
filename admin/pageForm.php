<?php
$title = "Page Form";
$pagesActive = "active";
$bodyId = 'id="pageForm"';
include("partials/navbar.php");
if (isset($_GET["nPageID"])) {
	$nPageID = $_GET["nPageID"];
	$sql = "SELECT 
			* FROM suggestions
			WHERE suggestions.id='" . $nPageID . "'";

	$results = mysqli_query(connect(), $sql);

	$page = mysqli_fetch_assoc($results);
} else {
	$nPageID = "";
	$page["strTitle"] = "";
	$page["strContent"] = "";
	$page["dPosted"] = "";
	$page["nUsersID"] = "";
	$page["nNumberOfSupport"] = "";
}

?>
<main>
	<?php
	if (isset($_GET['nPageID'])) {
		?>
	<h1>Edit a Suggestion</h1>
	<div class="breadcrumbs">
		<a href="pages.php">Pages</a> &gt; <span>Editing a Suggestion</span>
	</div>
	<?php
	} else {
		?>
	<h1>Create New Page</h1>
	<div class="breadcrumbs">
		<a href="pages.php">Pages</a> &gt; <span>New Page</span>
	</div>
	<?php
	}
	?>

	<p>Complete the form below to edit the suggestion.</p>

	<form method="post" action="savePage.php" enctype="multipart/form-data">
		<!-- Don't fotrget enctype="multipart/form-data" -->
		<input type="hidden" name="nPageID" value="<?= $nPageID ?>" />
		<div class="fieldset">
			<label>Title of the Suggestion</label>
			<input type="text" name="strTitle" value="<?= $page['strTitle'] ?>">
		</div>

		<div class="fieldset">
			<label>Content</label>
			<textarea name="strContent"><?= $page['strContent'] ?></textarea>
		</div>

		<div class="fieldset">
			<label>Posted Date</label>
			<input type="date" name="dPosted" value="<?= $page['dPosted'] ?>">
		</div>

		<div class="fieldset">
			<label>User Name</label>
			<?php
			$sql = "SELECT * FROM users WHERE id='" . $page['nUsersID'] . "'";
			$user = mysqli_fetch_assoc(mysqli_query(connect(), $sql));
			?>
			<p><?= $user['strUserName'] ?></p>
		</div>


		<!-- <div class="fieldset">
			<label>Number of Support</label>
			<input type="text" name="nNumberOfSupport" value="<?= $page['nNumberOfSupport'] ?>">
		</div> -->


		<div class="fieldset">
			<input type="submit" value="Save Changes" class="btn btnPositive">
			<a href="pages.php" class="btn btnNegative">Cancel</a>
		</div>
	</form>
</main>
<?php include("partials/footer.php") ?>
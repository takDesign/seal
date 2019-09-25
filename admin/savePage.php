<?php
include("functions/functions.php");

if ($_POST["nPageID"]) {
	$sql = "UPDATE suggestions SET strTitle='" . $_POST["strTitle"] . "', strContent='" . $_POST["strContent"] . "', dPosted='" . $_POST["dPosted"] . "' WHERE id='" . $_POST["nPageID"] . "'";
	mysqli_query(connect(), $sql);

	header("location: pages.php?success=true");
} else {

	$sql = "INSERT INTO suggestions (strTitle, strContent, dPosted) VALUES ('" . $_POST["strTitle"] . "', '" . $_POST["strContent"] . "', '" . $_POST["dPosted"] . "')";

	mysqli_query(connect(), $sql);

	header("location: pages.php?success=true");
}

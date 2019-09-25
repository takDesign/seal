<?php
include("functions/functions.php");

if ($_GET["nPageID"]) {
	$sql = "DELETE FROM suggestions WHERE id='" . $_GET["nPageID"] . "'";
}

mysqli_query(connect(), $sql);
header("location: pages.php?deleted=true");

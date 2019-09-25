<?php
include("functions/functions.php");

if ($_GET["nUsersID"]) {
	// update
	$sql = "DELETE FROM users WHERE id='" . $_GET["nUsersID"] . "'";
}

mysqli_query(connect(), $sql);

header("location: users.php?deleted=true");

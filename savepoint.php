<?php
include("functions/functions.php");
checkLogin();

if (0 < $_SESSION["points"]) {

	$currentPoints = $_SESSION["points"];

	$newPoints = $currentPoints - 1;

	$sql = "UPDATE users SET nPoints='" . $newPoints . "' WHERE id='" . $_SESSION["userID"] . "'";

	mysqli_query(connect(), $sql);

	$_SESSION["points"] = $newPoints;

	// To show new balance
	$sql = "SELECT nPoints FROM users WHERE id='" . $_SESSION["userID"] . "'";

	$results = mysqli_query(connect(), $sql);

	$arrDataResult = mysqli_fetch_assoc($results);

	echo json_encode($arrDataResult);
} else {
	return false;
}

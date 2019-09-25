<?php
include("functions/functions.php");
checkLogin();
$sql = "INSERT INTO users (strUserName, strPassword, strFirstName, strLastName, strEmAIL, nPoints) VALUES('" . $_POST["strUserName"] . "', '" . $_POST["strPassword"] . "', '" . $_POST["strFirstName"] . "', '" . $_POST["strLastName"] . "','" . $_POST["strEmail"] . "', '10')";
mysqli_query(connect(), $sql);

$sql = "SELECT * FROM users WHERE strUserName='" . $_POST['strUserName'] . "' AND  strPassword='" . $_POST['strPassword'] . "'";
$results = mysqli_query(connect(), $sql);
$currentUser = mysqli_fetch_assoc($results);

if ($currentUser) {
	$_SESSION["userID"] = $currentUser["id"];
	$_SESSION["userName"] = $currentUser["strUserName"];
	$_SESSION["firstName"] = $currentUser["strFirstName"];
	$_SESSION["points"] = $currentUser["nPoints"];

	header("location: suggestions.php?success=true");
} else {
	header("location: index.php?error=true");
}
header("location: suggestions.php?success=true");

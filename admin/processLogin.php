<?php
include("functions/functions.php");
checkLogin();
$sql = "SELECT * FROM users WHERE strUserName='" . $_POST['strUserName'] . "' AND  strPassword='" . $_POST['strPassword'] . "'";
$results = mysqli_query(connect(), $sql);
$currentUser = mysqli_fetch_assoc($results);
if ($currentUser) {
	$_SESSION["userID"] = $currentUser["id"];
	$_SESSION["userName"] = $currentUser["strUserName"];

	header("location: dashboard.php?success=true");
} else {
	header("location: index.php?error=true");
}

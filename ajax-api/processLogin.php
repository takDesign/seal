<?php

include("functions/functions.php");

$sql = "SELECT * FROM users WHERE strEmail='".$_POST["strEmail"]."' and strPassword='".$_POST['strPassword']."'";

$results = mysqli_query($con, $sql);
$arrCurrentUser = mysqli_fetch_assoc($results);

if ($arrCurrentUser)
{
	$_SESSION["userID"] = $arrCurrentUser["id"];
	header("location: suggestionlist.php");
} else {
	header("location: login.php");
}


?>
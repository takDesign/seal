<?php

include("functions.php");

$sql = "SELECT * FROM users WHERE strUserName='".$_POST["strUserName"]."' and strPassword='".$_POST['strPassword']."'";

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
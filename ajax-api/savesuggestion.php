<?php

include("functions/functions.php");
include("functions/checklogin.php");


$sql = "INSERT INTO suggestion (strName, strSuggestion, nUsersID) VALUES ('".$_POST['strName']."','".$_POST['strSuggestion']."','".$loggedInUserID."')";

mysqli_query($con, $sql);

header("location: suggestionlist.php");

?>
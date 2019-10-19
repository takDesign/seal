<?php

include("functions.php");
include("checklogin.php");


$sql = "INSERT INTO suggestions (strUserName, strContent, nUsersID) VALUES ('".$_POST['strUserName']."','".$_POST['strContent']."','".$loggedInUserID."')";

mysqli_query($con, $sql);

header("location: suggestionlist.php");

?>
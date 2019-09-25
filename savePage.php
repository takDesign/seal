<?php
include("functions/functions.php");
checkLogin();
date_default_timezone_set('America/Vancouver');
$date =  date("Y/m/d");

$sql = "INSERT INTO suggestions (strTitle, strContent, dPosted, nUsersID) VALUES ('" . $_POST["strTitle"] . "', '" . $_POST["strContent"] . "', '" . $date . "', '" . $_SESSION["userID"] . "')";

mysqli_query(connect(), $sql);

header("location: suggestions.php?success=true");

<?php
include("functions/functions.php");
checkLogin();

$sql = "SELECT nPoints FROM users WHERE id='" . $_SESSION["userID"] . "'";

$results = mysqli_query(connect(), $sql);

$arrDataResult = mysqli_fetch_assoc($results);

echo json_encode($arrDataResult);

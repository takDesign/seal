<?php

$ini = parse_ini_file("config.ini");
$con = mysqli_connect($ini["host"], $ini["username"], $ini["password"], $ini["database"]);
$username = $_POST['username'];

// use mysqli_real_escape_string to clean the variable from the user
$arrClean["username"] = mysqli_real_escape_string($con, $username);

$hashedPassword = password_hash($_POST["password"], PASSWORD_DEFAULT);

$statement = $con->prepare("INSERT INTO users (strUserName, strPassword) VALUES (?, ?)");
// echo $statement;
// die;
$statement->bind_param("ss", $arrClean["username"], $hashedPassword); //ssis is the pattern - so ss is the string, string
$statement->execute();


header("location: index.php");
?>
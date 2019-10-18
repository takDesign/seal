<?php
session_start();

$loggedInUserID = (isset($_SESSION["userID"])) ? $_SESSION["userID"] : false;

/*if (!$loggedInUserID)
{
	header("location: login.php");
}*/

// this is my function file
$con = mysqli_connect("localhost", "root", "", "seal");

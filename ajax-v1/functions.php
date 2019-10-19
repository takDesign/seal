<?php
session_start();

$loggedInUserID = (isset($_SESSION["userID"])) ? $_SESSION["userID"] : false;

// this is my function file
$con = mysqli_connect("localhost", "root", "", "seal");
?>
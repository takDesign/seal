<?php
$homeActive = (isset($homeActive)) ? $homeActive : "";
$subActive = (isset($subActive)) ? $subActive : "";
$contactActive = (isset($contactActive)) ? $contactActive : "";
$bodyId = (isset($bodyId)) ? $bodyId : "";
include("functions/functions.php");
$url = $_SERVER['REQUEST_URI'];
if (strstr($url, 'index.php') == false && strstr($url, 'signUp.php') == false) {
	checkLogin();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<link rel="shortcut icon" type="image/png" href="favicon.png" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>VANARTS STUDENT MOCK PROJECT SITE (www.vanarts.com)</title>
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700|Roboto:400,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="templates/css/normalize.css">
	<link rel="stylesheet" type="text/css" href="templates/css/main.css">
	<link rel="stylesheet" type="text/css" href="templates/css/style.css">
</head>

<body <?= $bodyId ?>>
	<header>
		<nav class="clearfix">
			<h1 id="logo"><a href="suggestions.php" title="home">Votelux</a></h1>
			<?php
			if (strstr($url, 'index.php') == false && strstr($url, 'signUp.php') == false) {
				$msg = '<p>Hello <strong>' . $_SESSION["firstName"] . '</strong>, You have <strong class="points"></strong> points to vote.</p><ul><li><a href="suggestions.php">Home</a></li><li><a href="pageForm.php">Make a Suggestion</a></li><li><a href="logout.php">Logout</a></li></ul>';
				echo $msg;
			}
			?>
		</nav>
	</header><!-- /header -->
	<div class="section">
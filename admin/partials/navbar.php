<?php
$dashActive = (isset($dashActive)) ? $dashActive : "";
$pagesActive = (isset($pagesActive)) ? $pagesActive : "";
$usersActive = (isset($usersActive)) ? $usersActive : "";
$bodyId = (isset($bodyId)) ? $bodyId : "";
include("partials/header.php");
?>

<body <?= $bodyId ?>>
	<header>
		<div class="title">
			<h1><a href="#">Tak CMS</a></h1>
		</div>
		<nav>
			<a href="dashboard.php" class="<?= $dashActive ?>"><i class="material-icons">dashboard</i>Dashboard</a>
			<a href="users.php" class="<?= $usersActive ?>"><i class="material-icons">perm_contact_calendar</i>Users</a>
			<a href="pages.php" class="<?= $pagesActive ?>"><i class="material-icons">description</i>Suggestions</a>
			<a href="logout.php" class="action">Logout</a>
		</nav>
	</header>
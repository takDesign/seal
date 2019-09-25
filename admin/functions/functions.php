<?php
//this is to connect to the DB
function connect()
{
	$con = mysqli_connect("localhost", "takahiro_votelux", "{DJ!P~lRd-8b", "takahiro_votelux");
	return $con;
}

function showMsg($condition, $type, $title, $msg)
{
	if (isset($_GET[$condition])) {
		return '<div class="msg ' . $type . '">
				<h2>' . $title . '</h2>
				<p>' . $msg . '</p>
			</div>';
	}
}

function checkLogin()
{
	session_start();
	if (!isset($_SESSION["userID"])) {
		header('location: index.php?error=true');
	}
}

function buildTable()
{
	$sql = "SELECT 
			suggestions.id,
			suggestions.strTitle,
			suggestions.dPosted,
			suggestions.nUsersID,
			users.strUserName AS strUserName
			FROM suggestions 
			LEFT JOIN users ON users.id=suggestions.nUsersID
			";
	$results = mysqli_query(connect(), $sql);

	$newhtml = "";
	while ($record = mysqli_fetch_assoc($results)) {
		$newhtml .= '<div class="d-table">
				<div class="d-table-cell"><a href="pageForm.php?nPageID=' . $record['id'] . '">' . $record['strTitle'] . '</a></div>
				<div class="d-table-cell">' . $record['dPosted'] . '</div>
				<div class="d-table-cell">' . $record['strUserName'] . '</div>
				<div class="d-table-cell"><a href="deletePage.php?nPageID=' . $record['id'] . '" class="delete"><i class="material-icons">delete_forever</i></a></div>
			</div>';
	}

	return $newhtml;
}


function buildUsersTable()
{

	$sql = "SELECT * FROM users";
	$results = mysqli_query(connect(), $sql);

	$newhtml = "";
	while ($record = mysqli_fetch_assoc($results)) {
		$newhtml .= '
			<div class="d-table">
				<div class="d-table-cell">' . $record['strFirstName'] . '</div>
				<div class="d-table-cell">' . $record['strLastName'] . '</div>
				<div class="d-table-cell">' . $record['strEmail'] . '</div>
				<div class="d-table-cell">' . $record['strUserName'] . '</div>
				<div class="d-table-cell">' . $record['nPoints'] . '</div>
				<div class="d-table-cell"><a href="deleteUsers.php?nUsersID=' . $record['id'] . '" class="delete"><i class="material-icons">delete_forever</i></a></div>
			</div>';
	}

	return $newhtml;
}

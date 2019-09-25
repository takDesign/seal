<?php
// function to connect to the DB
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
	// $loggedInUserID = (isset($_SESSION["userID"])) ? $_SESSION["userID"] : false;
	if (!isset($_SESSION["userID"])) {
		header('location: index.php?error=true');
	}
}

// function to get pages on the templates
function buildList()
{
	$sql = "SELECT 
			suggestions.id,
			suggestions.strTitle,
			suggestions.strContent,
			suggestions.dPosted,
			suggestions.nUsersID,
			users.strFirstName AS strFirstName
			FROM suggestions 
			LEFT JOIN users ON users.id=suggestions.nUsersID
			";
	$results = mysqli_query(connect(), $sql);

	$newhtml = "";
	while ($record = mysqli_fetch_assoc($results)) {
		$newhtml .= '<div class="d-table suggestion" data-suggestionid="' . $record['id'] . '">
				<div class="d-table-cell"><a href="pageDetail.php?nPageID=' . $record['id'] . '" class="title">' . $record['strTitle'] . '</a></div>
				<div class="d-table-cell">' . $record['dPosted'] . '</div>
				<div class="d-table-cell">' . $record['strFirstName'] . '</div>
				<div class="d-table-cell support" data-type="positive"></div>
				<div class="d-table-cell"><a href="#" class="vote"><i class="material-icons">how_to_vote</i></a></div>
			</div>';
	}

	return $newhtml;
}


// To show suggestion in pageDetail.php
function showSuggestion()
{

	if (isset($_GET["nPageID"])) {
		$nPageID = $_GET["nPageID"];
		$sql = "SELECT 
			* FROM suggestions
			WHERE suggestions.id='" . $nPageID . "'";

		$results = mysqli_query(connect(), $sql);

		$page = mysqli_fetch_assoc($results);
	} else {
		$nPageID = "";
		$page["strTitle"] = "";
		$page["strContent"] = "";
		$page["dPosted"] = "";
		$page["nUsersID"] = "";
	}
	$html = '<main class="inner suggestion" data-suggestionid="' . $page['id'] . '">
			<h2>' . $page['strTitle'] . '</h2>
			<div class="suggestionInfo"><span>Posted Date ' . $page["dPosted"] . '</span>';

	$sql = "SELECT * FROM users WHERE users.id='" . $page["nUsersID"] . "'";
	$results = mysqli_query(connect(), $sql);
	$user = mysqli_fetch_assoc($results);

	$html .= '<span>By ' . $user['strFirstName'] . ' ' . $user['strLastName'] . '</span></div>
			<div class="voteIcon"><a href="#" class="vote"><i class="material-icons">how_to_vote</i></a></div>
			<div class="support" data-type="positive"></div><span> have voted. Click the icon to vote.</span>
			<p class="suggestionP">' . $page['strContent'] . '</p>
		</main>';

	return $html;
}

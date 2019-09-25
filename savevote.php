<?php
include("functions/functions.php");
checkLogin();

if (0 < $_SESSION["points"]) {
	if (isset($_GET['nVote'])) {
		$sql = "INSERT INTO votes (nSuggestionsID, nVote, nUsersID) VALUES (" . $_GET['nSuggestionsID'] . "," . $_GET['nVote'] . "," . $_SESSION["userID"] . ")";
		mysqli_query(connect(), $sql);
	}
	$sql = "SELECT COUNT(id) as numVotes, SUM(IF(nVote>0, 1, 0)) as posVotes FROM votes WHERE nSuggestionsID=" . $_GET['nSuggestionsID'];

	$results = mysqli_query(connect(), $sql);

	$arrDataResult = mysqli_fetch_assoc($results);

	echo json_encode($arrDataResult);
} else {
	return false;
}

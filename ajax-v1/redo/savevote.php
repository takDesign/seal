<?php

include("functions.php");
// include("functions/checklogin.php");

// SAVE THE ITEM JUST VOTED ON
if (isset($_GET['nVote']))
{
	// $sql = "INSERT INTO votes (nSuggestionsID, nVote, nUsersID) VALUES (".$_GET['suggestionsID'].",".$_GET['nVote'].",".$loggedInUserID.")";
	$sql = "INSERT INTO votes (nSuggestionsID, nVote, nUsersID) VALUES (".$_GET['suggestionsID'].",".$_GET['nVote'].", 1)";
	// sql tests ok using if I write in the values

	mysqli_query($con, $sql);

}
// GET THE VOTE COUNT FOR THE CURRENT SUGGESTION
$sql = "SELECT COUNT(id) as voteCount FROM votes WHERE nSuggestionsID=".$_GET['suggestionsID'];
// sql tests ok using if I write in the values

$results = mysqli_query($con, $sql);
$arrDataResult = mysqli_fetch_assoc($results);

echo json_encode($arrDataResult);
?>
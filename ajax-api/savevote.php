<?php

include("functions.php");
include("checklogin.php");

// if we voted, than save it... 
if (isset($_GET['nVote']))
{
	$sql = "INSERT INTO votes (nSuggestionsID, nVote, nUserID) 
	VALUES (".$_GET['nSuggestionsID'].",".$_GET['nVote'].",".$loggedInUserID.")";

	mysqli_query($con, $sql);

}
// this gets the stats for the current suggestion
$sql = "SELECT COUNT(id) as numVotes, SUM(nVote) as posVotes FROM votes WHERE nSuggestionsID=".$_GET['nSuggestionsID'];

$results = mysqli_query($con, $sql);
$arrDataResult = mysqli_fetch_assoc($results);

echo json_encode($arrDataResult);
?>
<?php

include("functions.php");
// include("functions/checklogin.php");

// if we voted, than save it... 
if (isset($_GET['nVote']))
{
	$sql = "INSERT INTO votes (nSuggestionsID, nVote, nUsersID) VALUES (".$_GET['suggestionsID'].",".$_GET['nVote'].",".$loggedInUserID.")";

	mysqli_query($con, $sql);

}
// this gets the stats for the current suggestion
// IF(numVotes>0, 1, 0) MEANS if (something true, then this, elsethis) as aliasfieldname
$sql = "SELECT COUNT(id) as numVotes, SUM(nVote) as posVotes FROM votes WHERE nSuggestionsID=".$_GET['suggestionsID'];


$results = mysqli_query($con, $sql);

$arrDataResult = mysqli_fetch_assoc($results);

echo json_encode($arrDataResult);
?>
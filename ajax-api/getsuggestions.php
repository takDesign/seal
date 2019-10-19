<?php
// this file, gets all our suggestions and outputs a json data stream of the suggestion data


include("functions/functions.php");
include("functions/checklogin.php");

// this gets the stats for the current suggestion
// IF(numVotes>0, 1, 0) MEANS if (something true, then this, elsethis) as aliasfieldname
//$sql = "SELECT nSuggestionID, COUNT(id) as numVotes, SUM(IF(nVote>0, 1, 0)) as posVotes FROM votes GROUP BY nSuggestionID";
$where = "";
if (isset($_GET['nSuggestionID']))
{
	$where = "WHERE suggestion.id=".$_GET['nSuggestionID'];
}

$sql = "SELECT suggestion.id, suggestion.strName, suggestion.strSuggestion, suggestion.nUsersID, users.strEmail, COUNT(votes.id) as totalVotes, SUM(IF(votes.nVote>0, 1, 0)) as posVotes, SUM(IF(votes.nVote<0, 1, 0)) as negVotes FROM suggestion LEFT JOIN users ON users.id = suggestion.nUsersID LEFT JOIN votes ON votes.nSuggestionID=suggestion.id $where GROUP BY suggestion.id ";



$results = mysqli_query($con, $sql);

// loop over all the results
while($arrDataResult = mysqli_fetch_assoc($results)){
	// put the record, into a associative array indexed by the suggestionID
	$arrData[$arrDataResult["id"]] = $arrDataResult;
}

echo json_encode($arrData);

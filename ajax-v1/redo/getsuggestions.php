<?php
// this file, gets all our suggestions and outputs a json data stream of the suggestion data


include("functions.php");
// include("functions/checklogin.php");

// this gets the stats for the current suggestion
// IF(numVotes>0, 1, 0) MEANS if (something true, then this, elsethis) as aliasfieldname
//$sql = "SELECT nSuggestionID, COUNT(id) as numVotes, SUM(IF(nVote>0, 1, 0)) as posVotes FROM votes GROUP BY nSuggestionID";
$where = "";
if (isset($_GET['nSuggestionsID']))
{
	$where = "WHERE suggestions.id=".$_GET['nSuggestionsID'];
}

$sql = "SELECT suggestions.id, 
suggestions.dPosted, 
suggestions.strContent, 
suggestions.nUsersID, 
users.strUserName, 
COUNT(votes.id) as totalVotes, SUM(nVote) as voteCount FROM suggestions 
LEFT JOIN users ON users.id = suggestions.nUsersID 
LEFT JOIN votes ON votes.nSuggestionsID=suggestions.id $where GROUP BY suggestions.id";

$results = mysqli_query($con, $sql);

// loop over all the results
while($arrDataResult = mysqli_fetch_assoc($results)){
	// put the record, into a associative array indexed by the suggestionID
	$arrData[$arrDataResult["id"]] = $arrDataResult;
}

echo $arrData;
die;

echo json_encode($arrData);

<?php
// this file, gets all our suggestions and outputs a json data stream of the suggestion data
header('Content-Type: application/json');

include("functions.php");
include("checklogin.php");

// this gets the stats for the current suggestion
// IF(numVotes>0, 1, 0) MEANS if (something true, then this, elsethis) as aliasfieldname
//$sql = "SELECT nSuggestionID, COUNT(id) as numVotes, SUM(IF(nVote>0, 1, 0)) as posVotes FROM votes GROUP BY nSuggestionID";

$sql = "SELECT 
users.id,
users.strUserName,
count(votes.id) as numberOfVotes,
(SELECT COUNT(id) from suggestions WHERE suggestions.nUsersID=users.id) as numberSuggestions 
FROM users
LEFT JOIN votes ON votes.nUsersID=users.id
GROUP BY votes.nUsersID";

$results = mysqli_query($con, $sql);

// loop over all the results
while($arrDataResult = mysqli_fetch_assoc($results))
{
	// put the record, into a associative array indexed by the suggestionID
	$arrData[$arrDataResult["id"]] = $arrDataResult;
}

echo json_encode($arrData);
?>
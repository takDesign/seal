<?php
// this file, gets all our suggestions and outputs a json data stream of the suggestion data
header('Content-Type: application/json');

include("functions/functions.php");
include("functions/checklogin.php");

// this gets the stats for the current suggestion
// IF(numVotes>0, 1, 0) MEANS if (something true, then this, elsethis) as aliasfieldname
//$sql = "SELECT nSuggestionID, COUNT(id) as numVotes, SUM(IF(nVote>0, 1, 0)) as posVotes FROM votes GROUP BY nSuggestionID";

$sql = "SELECT 
users.id,
users.strEmail,
count(votes.id) as numberOfVotes,
SUM(IF(votes.nVote > 0, 1, 0)) as posVotes,
SUM(IF(votes.nVote < 0, 1, 0)) as negVotes,
(SELECT COUNT(id) from suggestion WHERE suggestion.nUsersID=users.id) as numberSuggestions 
FROM users
LEFT JOIN votes ON votes.nUserID=users.id
GROUP BY votes.nUserID";

$results = mysqli_query($con, $sql);

// loop over all the results
while($arrDataResult = mysqli_fetch_assoc($results)){
	// put the record, into a associative array indexed by the suggestionID
	$arrData[$arrDataResult["id"]] = $arrDataResult;
}

echo json_encode($arrData);
?>
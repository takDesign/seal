<?php

include("functions/functions.php");
include("functions/checklogin.php");

// this gets the stats for the current suggestion
// IF(numVotes>0, 1, 0) MEANS if (something true, then this, elsethis) as aliasfieldname
$sql = "SELECT nSuggestionID, COUNT(id) as numVotes, SUM(IF(nVote>0, 1, 0)) as posVotes FROM votes GROUP BY nSuggestionID";


$results = mysqli_query($con, $sql);


while($arrDataResult = mysqli_fetch_assoc($results))
{
	$arrData[$arrDataResult["nSuggestionID"]] = $arrDataResult;
}

echo json_encode($arrData);
?>
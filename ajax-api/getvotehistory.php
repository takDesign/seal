<?php

include("functions/functions.php");
include("functions/checklogin.php");

// this gets the stats for the current suggestion
// IF(numVotes>0, 1, 0) MEANS if (something true, then this, elsethis) as aliasfieldname
$sql = "SELECT votes.id,
votes.nSuggestionID,
votes.nVote,
votes.nUserID,
users.strEmail
FROM votes
LEFT JOIN users ON users.id=votes.nUserID
WHERE votes.nSuggestionID=".$_GET['nSuggestionID'];


$results = mysqli_query($con, $sql);


while($arrDataResult = mysqli_fetch_assoc($results)){
	$arrData[$arrDataResult["id"]] = $arrDataResult;
}

echo json_encode($arrData);
?>
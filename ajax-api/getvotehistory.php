<?php

include("functions.php");
include("checklogin.php");

// this gets the stats for the current suggestion
// IF(numVotes>0, 1, 0) MEANS if (something true, then this, elsethis) as aliasfieldname
$sql = "SELECT votes.id,
votes.nSuggestionsID,
votes.nVote,
votes.nUsersID,
users.strUserName
FROM votes
LEFT JOIN users ON users.id=votes.nUsersID
WHERE votes.nSuggestionsID=".$_GET['nSuggestionsID'];

$results = mysqli_query($con, $sql);

while($arrDataResult = mysqli_fetch_assoc($results)){
	$arrData[$arrDataResult["id"]] = $arrDataResult;
}

echo json_encode($arrData);
?>
<?php
include("functions/functions.php");
checkLogin();

$sql = "SELECT nSuggestionsID, COUNT(id) as numVotes, SUM(IF(nVote>0, 1, 0)) as posVotes FROM votes GROUP BY nSuggestionsID";

$results = mysqli_query(connect(), $sql);

while ($arrDataResult = mysqli_fetch_assoc($results)) {
	$arrData[$arrDataResult["nSuggestionsID"]] = $arrDataResult;
}

echo json_encode($arrData);

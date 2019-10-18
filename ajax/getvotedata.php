<?php

include("functions.php");
// include("functions/checklogin.php");

// this gets the stats for the current suggestion
// IF(numVotes>0, 1, 0) MEANS if (something true, then this, elsethis) as aliasfieldname
$sql = "SELECT nSuggestionsID, COUNT(id) FROM votes GROUP BY nSuggestionsID";


$results = mysqli_query($con, $sql);


while($arrDataResult = mysqli_fetch_assoc($results)){
	$arrData[$arrDataResult["nSuggestionsID"]] = $arrDataResult;
}

echo json_encode($arrData);
?>
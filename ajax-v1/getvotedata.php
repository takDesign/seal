<?php

include("functions.php");
include("checklogin.php");

// this gets the stats for the current suggestion
$sql = "SELECT nSuggestionsID, COUNT(id) as voteCount FROM votes GROUP BY nSuggestionsID";
// SQL TESTS OK

$results = mysqli_query($con, $sql);

while($arrDataResult = mysqli_fetch_assoc($results)){
	$arrData[$arrDataResult["nSuggestionsID"]] = $arrDataResult;
}

echo json_encode($arrData);
/*
JSON OBJECT 
{
	"1":{"nSuggestionsID":"1","voteCount":"37"},
	"2":{"nSuggestionsID":"2","voteCount":"2"},
	"3":{"nSuggestionsID":"3","voteCount":"5"},
	"4":{"nSuggestionsID":"4","voteCount":"2"},
	"5":{"nSuggestionsID":"5","voteCount":"2"},
	"6":{"nSuggestionsID":"6","voteCount":"5"},
	"8":{"nSuggestionsID":"8","voteCount":"1"},
	"9":{"nSuggestionsID":"9","voteCount":"1"},
	"18":{"nSuggestionsID":"18","voteCount":"1"},
	"19":{"nSuggestionsID":"19","voteCount":"2"},
	"20":{"nSuggestionsID":"20","voteCount":"2"}
}
*/
?>
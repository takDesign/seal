<?php
// this file, gets all our suggestions and outputs a json data stream of the suggestion data


include("functions.php");
include("checklogin.php");

// this gets the stats for the current suggestion
$where = "";
if (isset($_GET['nSuggestionsID']))
{
	$where = "WHERE suggestions.id=".$_GET['nSuggestionsID'];
}

$sql = "SELECT 
suggestions.id, 
suggestions.strName, 
suggestions.strSuggestion, 
suggestions.nUsersID, 
users.strUserName, COUNT(votes.id) as totalVotes FROM suggestions 
LEFT JOIN users ON users.id = suggestions.nUsersID 
LEFT JOIN votes ON votes.nSuggestionsID=suggestions.id $where GROUP BY suggestions.id ";

$results = mysqli_query($con, $sql);

// loop over all the results
while($arrDataResult = mysqli_fetch_assoc($results))
{
	// put the record, into a associative array indexed by the suggestionID
	$arrData[$arrDataResult["id"]] = $arrDataResult;
}
// turn into JSON for API call
echo json_encode($arrData);
?>
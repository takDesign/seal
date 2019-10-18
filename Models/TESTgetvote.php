<?php
// I'm just dumping all the PHP in here to test functionality is sound
// will need to split into MVC

// CONNECTION
session_start();

$loggedInUserID = (isset($_SESSION["userID"])) ? $_SESSION["userID"] : false;
$con = mysqli_connect("localhost", "root", "", "seal");

// CHECK LOGIN
if (!$loggedInUserID)
{
	echo "You're not logged in";
}

// GET VOTE DATA
$sql = "SELECT nSuggestionID, COUNT(id) as numVotes, SUM(IF(nVote>0, 1, 0)) as posVotes FROM votes GROUP BY nSuggestionID";

$results = mysqli_query($con, $sql);

while($arrDataResult = mysqli_fetch_assoc($results)){
	$arrData[$arrDataResult["nSuggestionID"]] = $arrDataResult;
}

echo json_encode($arrData);


?>
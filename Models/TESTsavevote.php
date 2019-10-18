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

// SAVE VOTE DATA
$sql = "SELECT nSuggestionsID, COUNT(id) FROM votes GROUP BY nSuggestionsID";

$results = mysqli_query($con, $sql);

while($arrDataResult = mysqli_fetch_assoc($results)){
	$arrData[$arrDataResult["nSuggestionsID"]] = $arrDataResult;
}

echo $arrData;

echo json_encode($arrData);
?>
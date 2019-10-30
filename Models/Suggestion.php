<?php

class Suggestion
{

	var $id;
	var $strTitle;
	var $strContent;
	var $dPosted;
	var $strUserName;

	public function __construct($id, $title, $suggestion, $datePosted, $strUserName)
	{
		$this->id = $id;
		$this->strTitle = $title;
		$this->strContent = $suggestion;
		$this->dPosted = $datePosted;
		$this->strUserName = $strUserName;
	}

	public static function suggest($suggestion, $userId)
	{
		date_default_timezone_set('America/Vancouver');
		$datePosted =  date("Y-m-d H:i:s"); // the MySQL DATETIME format
		$con = Db::con();

		$num = Db::query($con, "INSERT INTO suggestions (strContent, dPosted, nUsersID) VALUES ('" . mysqli_real_escape_string($con, $suggestion) . "', '" . $datePosted . "', '" . $userId . "') ");
		if ($num) {
			return true;
		} else {
			return false;
		}
	}

	// public static function getAll()
	// {
	// 	// go to the database and get a bunch of suggestions
	// 	$con = Db::con();
	// 	$results = Db::query(
	// 		$con,
	// 		"SELECT suggestions.id,
	// 		suggestions.strTitle,
	// 		suggestions.strContent,
	// 		suggestions.dPosted,
	// 		users.strUserName AS strUserName
	// 		FROM suggestions 
	// 		LEFT JOIN users ON users.id=suggestions.nUsersID
	// 		WHERE users.id
	// 		ORDER BY suggestions.dPosted DESC
	// 		"
	// 	);

	// 	while ($suggestion = mysqli_fetch_assoc($results)) {
	// 		$arrSuggestions[] = new Suggestion(
	// 			$suggestion["id"],
	// 			$suggestion["strTitle"],
	// 			$suggestion["strContent"],
	// 			$suggestion["dPosted"],
	// 			$suggestion["strUserName"]
	// 		);
	// 	}
	// 	return $arrSuggestions;
	// }

	//NEW FUNCTION to get all suggestions
	public static function getAll()
	{
		$con = Db::con();
		// this gets the stats for the current suggestion
		$where = "";
		if (isset($_GET['nSuggestionsID']))
		{
			$where = "WHERE suggestions.id=".$_GET['nSuggestionsID'];
		}

		$sql = "SELECT 
		suggestions.id, 
		suggestions.strTitle,
		suggestions.strContent,
		suggestions.dPosted,
		suggestions.nUsersID, 
		users.strUserName AS strUserName, 
		COUNT(votes.id) as totalVotes FROM suggestions 
		LEFT JOIN users ON users.id = suggestions.nUsersID 
		LEFT JOIN votes ON votes.nSuggestionsID=suggestions.id 
		$where GROUP BY suggestions.id
		ORDER BY suggestions.dPosted DESC";

		$results = mysqli_query($con, $sql);

		// loop over all the results
		while($arrDataResult = mysqli_fetch_assoc($results))
		// var_dump($arrDataResult); //looks good
		{
			// put the record, into a associative array indexed by the suggestionID
			$arrData[$arrDataResult["id"]] = $arrDataResult;
		}
		// turn into JSON for API call
		return json_encode($arrData);
		// echoed and can see in header of dashboard
	}

	// public static function get($id)
	// {
	// 	$con = Db::connect();
	// 	$results = Db::query($con, "SELECT * FROM suggestions WHERE id='".mysqli_real_escape_string($con, $id)."'");


	// 	$suggestion = mysqli_fetch_assoc($results);

	// 	// returns an object
	// 	return new Suggestion($suggestion["id"],
	// 						$suggestion["strSuggestion"], 
	// 						$suggestion["nUsersID"], 
	// 						$suggestion["dateCreated"]
	// 	);

	// }
}

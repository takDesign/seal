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

	public static function getAll()
	{
		// go to the database and get a bunch of suggestions plus votes
		$con = Db::con();
		$results = Db::query(
			$con,
			$where = "";
			if (isset($_GET['nSuggestionsID']))
			{
				$where = "WHERE suggestions.id=".$_GET['nSuggestionsID'];
			}

			$sql = "SELECT suggestions.id, 
			suggestions.strUserName, 
			suggestions.strContent, 
			suggestions.nUsersID, 
			users.strUserName, 
			COUNT(votes.id) as totalVotes, SUM(nVotes) as posVotes FROM suggestions 
			LEFT JOIN users ON users.id = suggestions.nUsersID 
			LEFT JOIN votes ON votes.nSuggestionsID=suggestions.id $where GROUP BY suggestions.id "
		);

		while ($suggestion = mysqli_fetch_assoc($results)) {
			$arrSuggestions[] = new Suggestion(
				$suggestion["id"],
				$suggestion["strTitle"],
				$suggestion["strContent"],
				$suggestion["dPosted"],
				$suggestion["strUserName"]
			);
		}
		return $arrSuggestions;
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

<?php

class Suggestion
{
	// var $id;
	// var $userId;
	// var $title;
	// var $suggestion;
	// var $datePosted;

	// public function __construct($id, $userId, $title, $suggestion, $datePosted)
	// {
	// 	$this->id = $id;
	// 	$this->userId = $userId;
	// 	$this->title = $title;
	// 	$this->suggestion = $suggestion;
	// 	$this->datePosted = $datePosted;
	// }

	public static function suggest($title, $suggestion, $userId)
	{
		date_default_timezone_set('America/Vancouver');
		$datePosted =  date("Y/m/d");
		$con = Db::con();

		$num = Db::query($con, "INSERT INTO suggestions (strTitle, strContent, dPosted, nUsersID) VALUES ('" . mysqli_real_escape_string($con, $title) . "', '" . mysqli_real_escape_string($con, $suggestion) . "', '" . $datePosted . "', '" . $userId . "') ");
		if ($num) {
			return true;
		} else {
			return false;
		}

		//Db::query($con, "INSERT INTO suggestions WHERE id='" . mysqli_real_escape_string($con, $id) . "'");
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

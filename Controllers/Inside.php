<?php

class Inside extends Controller
{
	// index.php?controller=inside&route=default
	public function
	default()
	{
		echo "hello default";
	}

	public function processSuggestion()
	{
		$bSuggestStatus = Suggestion::suggest($_POST["strTitle"], $_POST["strContent"], $_SESSION["userid"]);
		if ($bSuggestStatus) {
			header("location: index.php?controller=inside&route=showDashboard&success=true");
		} else {
			echo "Coudn't post your suggestion";
		}
	}

	public function showDashboard()
	{

		$arrSuggestions = Suggestion::getAll();

		$body = $this->loadView("Views/newSuggest.php", $arrSuggestions); // Passing data to loadView so suggestionList.php can read it

		include("Views/mainTemplate.php"); // this mainTemplate is expecting $body
	}

	public function preTrip()
	{
		// this function will run before doing any routes inside this controller
	}

	public function postTrip()
	{
		// this function will run after running a routes inside this controller
	}
}

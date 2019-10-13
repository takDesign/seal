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

	static public function getAll()
	{
		// go to the database and get a bunch of suggestions
		
	}


	public function showDashboard()
	{
		$con = Db::con();
		$results = Db::query($con, "SELECT * FROM suggestions");

		while($suggestion = mysqli_fetch_assoc($results))
		{
			$arrSuggestions[] = new Suggestion(
										$suggestion["id"],
										$suggestion["strTitle"], 
										$suggestion["strContent"], 
										$suggestion["dPosted"],
										$suggestion["nUsersID"]
			);
		}
		$arrSuggestions;

		//suggestionList overwrites data, arrSuggestions is passing from the array. We get the data in teh array. In the array we get the list of data and we send to loadview.
		// print_r($arrSuggestions);
		// die;
		// $body = $this->loadView("Views/newSuggest.php");
		$body = include("Views/newSuggest.php");
		
		// $body = $this->loadView("Views/mainTemplate", $body);
		include("Views/mainTemplate.php");
		//include("Views/suggestionList.php"); // show us the suggestion list
		// include("Views/mainTemplate.php"); // this mainTemplate is expecting $body

		

		// print_r($arrSuggestions);
		// die;
	
	}

	public function preTrip()
	{
		// this function will run before doing any routes inside this controller
	}

	public function postTrip()
	{
		// this function will run after running a routes inside this controller
	}

	// public function showDashboard()
	// {
	// 	$body = $this->loadView("Views/loginForm.php");

	// 	include("Views/mainTemplate.php"); // this mainTemplate is expecting $body
	// }
}

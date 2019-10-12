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
		$body = $this->loadView("Views/newSuggest.php");

		include("Views/mainTemplate.php"); // this mainTemplate is expecting $body

		// echo "SESSION ID: " . $_SESSION["userid"];
		// echo '<br><a href="index.php?controller=inside&route=showDashboard">Post a suggestion</a>';
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

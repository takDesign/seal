<?php
class Votes extends Controller
{
	public function processVote()
	{
		$bVoteStatus = Voting::vote($_POST["nVote"], $_SESSION["userid"]);
		if ($bVoteStatus) {
			header("location: index.php?controller=inside&route=showDashboard&success=true");
		} else {
			echo "Coudn't post your suggestion";
		}
	}

	public function preTrip()
	{
		// this function will run before doing any routes inside this controller
		$nUserID = User::checkLoggedIn();
		if (!$nUserID) {
			header("location: index.php?controller=outside&route=login&error=true");
		}
	}

	public function postTrip()
	{
		// this function will run after running a routes inside this controller
	}
}

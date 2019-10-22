<?php
class Outside extends Controller
{
	// index.php?controller=outside&route=default
	public function
	default()
	{
		echo "hello default";
	}

	public function showLogin()
	{
		$body = $this->loadView("Views/loginPage.php");

		include("Views/mainTemplate.php"); // this mainTemplate is expecting $body
	}

	public function processLogin()
	{
		//I also have to send things here...
		$bLogInStatus = User::login($_POST["username"], $_POST["password"]);

		if ($bLogInStatus) {
			// look for a controller called suggestions and the method inside their called "new"
			header("location: index.php?controller=inside&route=showDashboard&login=true");
		} else {
			// echo "jk we couldn't quite get ya there...";
			header("location: index.php?error=ture");
		}
	}

	public function processLogout()
	{
		$_SESSION['userID'] = false;
		session_destroy();
		header("location: index.php");
	}

	public function createNewUser()
	{
		User::saveRegister($_POST["strFirstName"], $_POST["strLastName"], $_POST["strEmail"], $_POST["strUserName"], $_POST["strPassword"]);
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
?>
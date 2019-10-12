<?php

Class User
{
	static public function login($username, $password)
	{
		$con = Db::con();
		// $results = Db::query($con, "SELECT * FROM users WHERE strUserName='".mysqli_real_escape_string($con, $username)."' AND strPassword='".mysqli_real_escape_string($con, $password)."'");

		//IMPORTANT --> you have to just check for
		$results = Db::query($con, "SELECT * FROM users WHERE strUserName='".mysqli_real_escape_string($con, $username)."'");
		
		$user = mysqli_fetch_assoc($results);
		
		// $hashedPassword = password_hash($_POST["password"], PASSWORD_DEFAULT);

		//POST is the users input, so if it matches the hashed password in the db then success!
		if(password_verify($_POST["strPassword"], $user["strPassword"])){
			// echo "Welcome to the Dash bb ---->";//PASSWORDS MATCH THE DB!
		} else{
			// print_r("Wrong Password ---->".$_POST["password"].' '.$user["strPassword"]);

		}

		if ($user)
		{
			$_SESSION["userid"] = $user["id"];
			return true;
		} else {
			return false;
		}
	} // end login function

	static public function getCurrentUser()
	{

		if (isset($_SESSION["userid"]))
		{
			$con = Db::con();
			$results = Db::query($con, "SELECT * FROM users WHERE id='".mysqli_real_escape_string($con, $_SESSION["userid"])."'");

			$user = mysqli_fetch_assoc($results);
			return $user;
		} else {
			return false;
		}
	} // end get current user function

	static public function checkLoggedIn()
	{
		if ($_SESSION["userid"])
		{
			return $_SESSION["userid"];
		} else {
			return false;
		}
	} // end check logged in function

	static public function saveRegister()
	{
		$con = Db::con();

		// empty variables catches data from form input fields
		$firstName = "";
		$lastName = "";
		$email = "";
		$userName = "";
		$password = "";

		// setting variables to be false to later turn true once validation occurs
		$validFirstName = false;
		$validLastName = false;
		$validEmail = false;
		$validUserName = false;
		$validPassword = false;

		// first name validation - only letters, minimum of 2
		if($_POST['strFirstName'] !== '')
		{
			$firstName = $_POST['strFirstName'];
			$reg = "/^([a-zA-Z' ]+){2,}$/";
			$reg_check = preg_match($reg,$firstName);
			$validFirstName = ($reg_check) ? true : false;

			if(!$validFirstName){
				echo "Please use only letters for your first name <br>";
			}
		}

		// last name validation - only letters, minimum of 2
		if($_POST['strLastName'] !== '')
		{
			$lastName = $_POST['strLastName'];
			$reg = "/^([a-zA-Z' ]+){2,}$/";
			$reg_check = preg_match($reg,$lastName);
			$validLastName = ($reg_check) ? true : false;

			if(!$validLastName){
				echo "Please use only letters for your last name <br>";
			}
		} 

		// email validation - letters & numbers, must have 1 @, must have 1 . , email suffix must be a minimum of 2 characters
		if($_POST['strEmail'] !== '')
		{
			$email = $_POST['strEmail'];
			$reg = "/[a-zA-Z0-9.\-_]{3,}+@{1}[a-zA-Z0-9]{4,}[.]{1}[a-zA-Z]{2,}/";
			$reg_check = preg_match($reg,$email);
			$validEmail = ($reg_check) ? true : false;

			if(!$validEmail){
				echo "Please enter a valid email <br>";
			}
		} 

		// username validation - 
		if($_POST['strUserName'] !== '')
		{
			$userName = $_POST['strUserName'];
			$reg =  "/^([a-zA-Z'\-_ ]+){2,}$/";
			$reg_check = preg_match($reg,$userName);
			$validUserName = ($reg_check) ? true : false;

			if(!$validUserName){
				echo "please enter a real username <br>";
			}
		} 

		// password validation - 
		if($_POST['strPassword'] !== '')
		{
			$password = $_POST['strPassword'];
			$reg = '/^(?=.*\d)(?=.*[A-Z])(?=.*[!@#$%])[0-9A-Za-z!@#$%]{8,20}$/';
			$reg_check = preg_match($reg,$password);
			$validPassword = ($reg_check) ? true : false;

			if(!$validPassword){
				echo "Please enter a password that contains at least 1 capital letter, 1 special character, and 1 number. Must be at least 8 characters <br>";
			}
		}


		// if validation is true, sanitize and hash password
		if($validFirstName && $validLastName && $validEmail && $validUserName && $validPassword)
		{
			$firstName = $_POST['strFirstName'];
			$arrClean["strFirstName"] = mysqli_real_escape_string($con, $firstName);
	
			$lastName = $_POST['strLastName'];
			$arrClean["strLastName"] = mysqli_real_escape_string($con, $lastName);
	
			$email = $_POST['strEmail'];
			$arrClean["strEmail"] = mysqli_real_escape_string($con, $email);
			
			$userName = $_POST['strUserName'];
			// use mysqli_real_escape_string to clean the variable from the user
			$arrClean["strUserName"] = mysqli_real_escape_string($con, $userName);
	
			$hashedPassword = password_hash($_POST["strPassword"], PASSWORD_DEFAULT);
	
			$statement = $con->prepare("INSERT INTO users (strFirstName, strLastName, strUserName, strEmail, strPassword) VALUES (?, ?, ?, ?, ?)");
			// echo $statement;
			// die;
			$statement->bind_param("sssss", $arrClean["strFirstName"], $arrClean["strLastName"], $arrClean["strEmail"], $arrClean["strUserName"], $hashedPassword); //ssis is the pattern - so ss is the string, string
			$statement->execute();
			
			header("location: index.php");

		}
	} // end save register

}

?>
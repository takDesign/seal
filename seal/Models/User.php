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
		if(password_verify($_POST["password"], $user["strPassword"])){
			// echo "Welcome to the Dash bb ---->";//PASSWORDS MATCH THE DB!
		}else{
			// print_r("Wrong Password ---->".$_POST["password"].' '.$user["strPassword"]);

		}

		if ($user)
		{
			$_SESSION["userid"] = $user["id"];
			return true;
		} else {
			return false;
		}
	}

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
	}

	static public function checkLoggedIn()
	{
		if ($_SESSION["userid"])
		{
			return $_SESSION["userid"];
		} else {
			return false;
		}
	}

	// public function verify()
	// {
		// $ini = parse_ini_file("config.ini");
		// $con = mysqli_connect($ini["host"], $ini["username"], $ini["password"], $ini["database"]);

		//get username that is in teh database
		// $username = $_GET['username'];

		// $hashedPassword = password_hash($_POST["password"], PASSWORD_DEFAULT);

		// //POST is the users input, so if it matches the hashed password in the db then success!
		// if(password_verify($_POST["password"],$user["password"])){
		// 	echo "Welcome to the Dash bb ---->";//PASSWORDS MATCH THE DB!
		// }else{
		// 	echo "Wrong Password ---->";
		// }
	// }
}

?>
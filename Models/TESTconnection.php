<?php
// CONNECTION
// session_start();

// $loggedInUserID = (isset($_SESSION["userID"])) ? $_SESSION["userID"] : false;
$con = mysqli_connect("localhost", "root", "", "seal");


// $sql = "SELECT * FROM users WHERE strUserName='tak' and strPassword='$2y$10$MHMVwW6D/j9s2bO5oFlaL.bZ3MUzsOcqnGwTfHcAsiMJnmgufrBNK'";
// $results = mysqli_query($con, $sql);
// $arrCurrentUser = mysqli_fetch_assoc($results);

// // CHECK LOGIN
// if (!$loggedInUserID)
// {
// 	echo "You're not logged in";
// }

// SUGGESTION ID
$sql = "SELECT suggestions.id,
suggestions.strTitle,
suggestions.strContent,
suggestions.dPosted,
users.strUserName AS strUserName
FROM suggestions 
LEFT JOIN users ON users.id=suggestions.nUsersID
WHERE users.id
ORDER BY suggestions.dPosted DESC
";
$results = mysqli_query($con, $sql);
?>
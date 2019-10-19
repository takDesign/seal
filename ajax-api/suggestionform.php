<?php
include("functions/functions.php");

// this file will only be on pages I want to make sure are password protected
include("functions/checklogin.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>	</title>
	<link rel="stylesheet" type="text/css" href="css/heartcss.css">
	<style>
		.votesystem { overflow: auto; }
		.votesystem .votesystem .pos, .votesystem .votesystem .neg {float: left;}
		.heart {display: inline-block;}
	</style>
</head>
<body>
<a href="suggestionlist.php">go back to suggestion list</a>

<h1>Create New Suggestion</h1>
<form method="post" action="savesuggestion.php">
	<input type="text" name="strName" placeholder="name of suggestion"><br/>
	<input type="text" name="strSuggestion" placeholder="enter suggestion"><br/>
	<input type="submit" name="strSubmit" value="Save Suggestion"/>
</form>
</div>
</body>
</html>
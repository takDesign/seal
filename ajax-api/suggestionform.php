<?php
include("functions.php");

// this file will only be on pages I want to make sure are password protected
include("checklogin.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>	</title>
	<style>
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
<?php
include("functions.php");

// this file will only be on pages I want to make sure are password protected
// include("functions/checklogin.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>	</title>
	<link rel="stylesheet" type="text/css" href="css/heartcss.css">	
</head>
<body>
<a href="suggestionform.php">make new suggestion</a>

<h1>Suggestion List</h1>
<ul class="saltandpepper" data-api="getsuggestions.php" id=>
	<li><a href="suggestiondetails.php?id={id}">{strName}</a></li>
</ul>

<h2>Users</h2>
<ul class="saltandpepper" data-api="getusers.php">
	<li>{strEmail}, {numberOfVotes} votes, {posVotes} positive, {negVotes} negative, {numberSuggestions} total suggestions they created</li>
</ul>


<script
  src="http://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
 <script type="text/javascript" src="js/TemplateParser.js"></script>
 <script type="text/javascript" src="js/main.js"></script>
</body>
</html>
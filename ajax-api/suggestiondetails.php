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
</head>
<body>
<a href="suggestionform.php">make new suggestion</a>

<div class="saltandpepper" data-api="getsuggestions.php?nSuggestionID=<?=$_GET['id']?>">
	<h1>{strName}</h1>
	<p>{strSuggestion}</p>
</div>

<div class="voteHistory saltandpepper" data-api="getvotehistory.php?nSuggestionID=<?=$_GET['id']?>">
	{strEmail}, voted {nVote}<Br/>
</div>


<script
  src="http://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
 <script type="text/javascript" src="js/TemplateParser.js"></script>
 <script type="text/javascript" src="js/main.js"></script>
</body>
</html>
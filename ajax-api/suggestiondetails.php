<?php
include("functions.php");

// this file will only be on pages I want to make sure are password protected
include("checklogin.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/heartcss.css">	
</head>
<body>
<a href="suggestionform.php">make new suggestion</a>

<div class="saltandpepper" data-api="getsuggestions.php?nSuggestionsID=<?=$_GET['id']?>">
	<h1>{strTitle}</h1>
	<p>{strContent}</p>
</div>

<div class="voteHistory saltandpepper" data-api="getvotehistory.php?nSuggestionsID=<?=$_GET['id']?>">
	{strUserName}, voted {nVote}<Br/>
</div>

<script
  src="http://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
 <script type="text/javascript" src="TemplateParser.js"></script>
 <script type="text/javascript" src="main.js"></script>
</body>
</html>
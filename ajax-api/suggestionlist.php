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
<a href="stats.php">View Stats</a>

<h1>Suggestions</h1>


<div id="suggestionlist" class="saltandpepper" data-api="getsuggestions.php" data-callback="bindVoteSystem">
	<div class="suggestion" data-suggestionid="{id}">
		<h2>{strName}</h2>
		<p>{strSuggestion}</p>
		<div class="votesystem">
			<div class="pos">
				<a href="#"><div class="heart" data-type="positive"></div></a>
				<div class="count">{posVotes}</div>
			</div>
			<div class="neg">
				<a href="#"><div class="heart neg" data-type="negative"></div></a>
				<div class="count">{negVotes}</div>
			</div>
		</div>
	</div>
</div>

<script
  src="http://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
 <script type="text/javascript" src="js/TemplateParser.js"></script>
 <script type="text/javascript" src="js/main.js"></script>
</body>
</html>
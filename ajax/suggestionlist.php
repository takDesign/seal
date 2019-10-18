<?php
include("functions.php");

// this file will only be on pages I want to make sure are password protected
// include("functions/checklogin.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>	</title>
</head>
<body>


<h1>Suggestions</h1>


<div id="suggestionlist" class="saltandpepper" data-api="getsuggestions.php" data-callback="bindVoteSystem">
	<div class="suggestion" data-suggestionid="{id}">
		<h2>{strUserName}</h2>
		<p>{strContent}</p>
		<div class="votesystem">
			<div class="pos">
				<a href="#"><div class="heart" data-type="positive"></div></a>
				<div class="count">{posVotes}</div>
			</div>
		</div>
	</div>
</div>

<script
  src="http://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
 <script type="text/javascript" src="TemplateParser.js"></script>
 <script type="text/javascript" src="main.js"></script>
</body>
</html>
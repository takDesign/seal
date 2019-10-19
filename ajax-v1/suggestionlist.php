<?php
include("functions.php");

// this file will only be on pages I want to make sure are password protected
include("checklogin.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>	</title>
	<script src="https://kit.fontawesome.com/2a49eb69db.js"></script>
	<style>
	.heartdeta {display: block; clear: both;}
	.heart{
    position: relative;
    width: 50px;
    height: 45px;
    float: left;
}
.heart:before,
.heart:after{
    position: absolute;
    content: "";
    left: 25px;
    top: 0;
    width: 25px;
    height: 40px;
    background: #fc2e5a;
    -moz-border-radius: 50px 50px 0 0;
    border-radius: 50px 50px 0 0;
    -webkit-transform: rotate(-45deg);
       -moz-transform: rotate(-45deg);
        -ms-transform: rotate(-45deg);
         -o-transform: rotate(-45deg);
            transform: rotate(-45deg);
    -webkit-transform-origin: 0 100%;
       -moz-transform-origin: 0 100%;
        -ms-transform-origin: 0 100%;
         -o-transform-origin: 0 100%;
            transform-origin: 0 100%;
}
.heart:after{
    left: 0;
    -webkit-transform: rotate(45deg);
       -moz-transform: rotate(45deg);
        -ms-transform: rotate(45deg);
         -o-transform: rotate(45deg);
            transform: rotate(45deg);
    -webkit-transform-origin: 100% 100%;
       -moz-transform-origin: 100% 100%;
        -ms-transform-origin: 100% 100%;
         -o-transform-origin: 100% 100%;
            transform-origin :100% 100%;
}
	</style>
</head>
<body>

<h1>Suggestions</h1>
<?php
$sql = 
// "SELECT * FROM suggestions ORDER BY id DESC";
"SELECT suggestions.id,
suggestions.strContent,
suggestions.dPosted,
users.strUserName
FROM users
LEFT JOIN suggestions ON users.id=suggestions.nUsersID";

$results = mysqli_query($con, $sql);
?>
<!-- alternatative: turn the suggestionlist into a component, just like your table was in the table ajax assignment. then make a load data request via ajax and load ALL your suggestions in as an ajax data response, then loop over them and create the HTML -->

<div id="suggestionlist">
	<?php
	while($suggestion = mysqli_fetch_assoc($results)){

		?>
		<div class="suggestion" data-nSuggestionsID="<?=$suggestion["id"]?>">
			<h2><?=$suggestion["strUserName"]?></h2>
			<p><?=$suggestion["strContent"]?></p>
			<p><?=$suggestion["dPosted"]?></p>
			<div class="votesystem">
				<div class="pos">
					<a href="#">
						<div class="heart" data-type="positive"></div>
					</a>
					<div class="count"></div>
				</div>
			</div>
		</div>
	<?php
	}
	?>
	
</div>
<script
  src="http://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
<script>
$(function()
{
	// functionally scopped variable
	var dataPackage = {};

	// GO GET ALL SUGGESTION DATA
	$.ajax({
		url: "getvotedata.php",
		dataType: "json",
		success: function(data)
		{
			dataPackage = data;
			/// ONLY START CREATING THE OBJECTS ONCE DATA IS RETURNED
			$(".suggestion").each(function(index, thisDOMObject){
				new VoteSystem(thisDOMObject, dataPackage);
			})
		}
	});
});

var VoteSystem = function(thisDOMObject, dataPackage)
{
	var vs = this;
	vs.dataPackage = dataPackage;
	vs.element = thisDOMObject;
	vs.nSuggestionsID = $(thisDOMObject).data("nSuggestionsID");

	vs.vote = function(voteType)
	{
		var nVote = -1;
		if (voteType == "positive")
		{
			nVote = 1;
		}
		
		$.ajax({
			url: "savevote.php?nSuggestionsID="+vs.nSuggestionsID+"&nVote="+nVote,
			dataType: "json",
			success: function(data)
			{
				// update the pos votes and neg votes
				$(".pos .count", vs.element).html(data.posVotes);
				$(".neg .count", vs.element).html(data.numVotes-data.posVotes);
			}
		})
	}

	vs.loadVoteHistory = function()
	{
		if (typeof vs.dataPackage[vs.nSuggestionsID] != "undefined")
		{
			// update the pos votes and neg votes
			$(".pos .count", vs.element).html(vs.dataPackage[vs.nSuggestionsID].posVotes);
			$(".neg .count", vs.element).html(vs.dataPackage[vs.nSuggestionsID].numVotes-vs.dataPackage[vs.nSuggestionsID].posVotes);
		}
	}

	$(".heart", thisDOMObject).click(function()
	{
		var voteType = $(this).data("type");
		vs.vote(voteType);
	});
	vs.loadVoteHistory();
}

</script>
</body>
</html>
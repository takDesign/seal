$(function()
{
	// functionally scopped variable
	var dataPackage = {};

	// GO GET ALL SUGGESTION DATA
	$.ajax({
			url: "Voting.php",
			dataType: "json",
			success: function(data)
			{
				var templateHTML = $("#suggestionList").html();
				var destinationObject = $("#suggestionList");
				LoadTemplate(data, templateHTML,destinationObject);

				/// ONLY START CREATING THE OBJECTS ONCE DATA IS RETURNED
				$(".suggestion").each(function(index, thisDOMObject){
					new VoteSystem(thisDOMObject);
				})
			}
		});
});

var VoteSystem = function(thisDOMObject)
{
	var vs = this;
	vs.element = thisDOMObject;
	vs.suggestionID = $(thisDOMObject).data("suggestionid");

	vs.vote = function(voteType)
	{
		var nVote = -1;
		if (voteType == "positive")
		{
			nVote = 1;
		}
		
		$.ajax({
			url: "Voting.php?nSuggestionsID="+vs.suggestionID+"&nVote="+nVote,
			dataType: "json",
			success: function(data)
			{
				// update the votes in the counter
				$(".vote .count", vs.element).html(data.posVotes);
			}
		})
	}

	$(".heart", thisDOMObject).click(function()
	{
		var voteType = $(this).data("type");
		vs.vote(voteType);
	});
}
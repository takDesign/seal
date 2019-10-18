$(function()
{
	$(".saltandpepper").each(function(index, templateObject)
	{
		var ajaxURL = $(templateObject).data("api");
		var callBack = $(templateObject).data("callback");

		$.ajax({
			url: ajaxURL,
			dataType: "json",
			success: function(suggestionData){
				// make a suggestion on the page
				TemplateParser(suggestionData, "suggestionlist");
				if (callBack)
				{
					// this calls the function "callback" (which is set to some variabel value... ie. doThis(); )
					window[callBack].call();
				}
			}
		});
	});
});

function bindVoteSystem()
{
	$(".suggestion").each(function(index, domObject){
		new VoteSystem(domObject);
	});
}

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
			url: "savevote.php?suggestionsID="+vs.suggestionID+"&nVote="+nVote,
			dataType: "json",
			success: function(data)
			{
				// update the pos votes and neg votes
				$(".pos .count", vs.element).html(data.posVotes);
			}
		})
	}

	$(".heart", thisDOMObject).click(function()
	{
		var voteType = $(this).data("type");
		vs.vote(voteType);
	});
}
// To get number of votes from server
$(function () {
	var dataPackage = {};
	$.ajax({
		url: "getvote.php",
		dataType: "json",
		success: function (data) {
			dataPackage = data;

			$(".suggestion").each(function (index, thisDomObject) {
				new VoteSystem(thisDomObject, dataPackage);
			});
		},
		error: function () {
			alert("Sorry, failed to load votes");
		}
	});

});

// To save votes
var VoteSystem = function (thisDomObject, dataPackage) {
	var vs = this;
	vs.dataPackage = dataPackage;
	vs.el = thisDomObject;
	vs.suggestionID = $(thisDomObject).data("suggestionid");

	vs.vote = function (voteType) {
		// I don't have negative vote(dislike) this time
		// var nVote = -1;
		// if (voteType == "positive")
		// {
		// 		nVote = 1;
		// }
		var nVote = 1;

		$.ajax({
			url: "savevote.php?nSuggestionsID=" +
				vs.suggestionID +
				"&nVote=" +
				nVote,
			dataType: "json",
			success: function (data) {
				$(".support", vs.el).html(data.posVotes);
			},
			error: function () {
				alert("Failed to save a vote");
			}
		});
	};

	vs.loadVoteHistory = function () {
		if (typeof vs.dataPackage[vs.suggestionID] != "undefined") {
			$(".support", vs.el).html(vs.dataPackage[vs.suggestionID].posVotes);
		} else {
			//console.log(data.posVotes);
		}
	};
	// To subtract a point from user when they vote
	vs.savePoint = function () {
		$.ajax({
			url: "savepoint.php",
			dataType: "json",
			success: function (data) {
				var points = data.nPoints;
				console.log(points);
				$(".points").html(points);
			},
			error: function () {
				alert("You don't have any point. Please vote tomorrow.");
			}
		});
	};

	$(".vote", thisDomObject).click(function () {
		var voteType = $(this).data("type");
		vs.vote(voteType);
		vs.savePoint();
	});

	vs.loadVoteHistory();
};
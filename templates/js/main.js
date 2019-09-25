$(function () {
	// To get points in a nav
	$.ajax({
		url: "getpoints.php",
		dataType: "json",
		success: function (data) {
			var points = data.nPoints;

			$(".points").html(points);
		},
		error: function () {
			alert("Sorry, failed to load your points");
		}
	});
});
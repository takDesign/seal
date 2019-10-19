$(function()
{
	$(".saltandpepper").each(function(index, templateObject)
	{
		var ajaxURL = $(templateObject).data("api");
		var callBack = $(templateObject).data("callback");

		$.ajax({
			url: ajaxURL,
			dataType: "json",
			success: function(data){
				// make a suggestion on the page
				TemplateParser(data, templateObject);
				if (callBack)
				{
					// this calls the function "callback" (which is set to some variabel value... ie. doThis(); )
					window[callBack].call();
				} else {
					alert('error');
				}
			}
		});
	});
});


var TemplateParser = function(dataObject,templateObject)
{
	var templateHTML = templateObject.innerHTML;
	var newHTML = "";

	// propert in object means, key > object // we use this for looping over objects //
	for(key in dataObject)
	{
		// FOR EACH OF THE KEYS in THIS SPECIFIC SUGGESTION....
		var tempHTML = templateHTML;
		for(varName in dataObject[key])
		{
			tempHTML = tempHTML.replace("{"+varName+"}", dataObject[key][varName])
		}
		newHTML = newHTML + tempHTML;
	}
	templateObject.innerHTML = newHTML;
}
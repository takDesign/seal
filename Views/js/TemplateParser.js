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
		//console.log(key,suggestionData[key]);
		// for each suggestion in the suggestionData... duplicate/append another suggestion
		// to the newHTML according to the templateHTML

		// FOR EACH OF THE KEYS in THIS SPECIFIC SUGGESTION....
		var tempHTML = templateHTML;
		for(varName in dataObject[key])
		{
			//varName = is the key
			//suggestionData[key][varName] =  is the value
			//tempHTML = tempHTML.replace("{strName}", "Suggestion Name")
			tempHTML = tempHTML.replace("{"+varName+"}", dataObject[key][varName])
		}
		newHTML = newHTML + tempHTML;
	}

	templateObject.innerHTML = newHTML;

}
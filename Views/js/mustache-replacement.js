// This will load the HTMl template and the populate the mustache fields based on ajax data

var mustacheReplace = function(data, template, destination)
{

	var htmlTemplate = template;
	var newHTML = "";

	for(var i=0; i<data.length; i++)
	{
		var tempHTML = htmlTemplate;
		for(var key in data[i])
		{
			tempHTML = tempHTML.replace('{'+key+'}', data[i][key]);
		}
		newHTML = newHTML + tempHTML;
	}
	destination.html(newHTML);
}
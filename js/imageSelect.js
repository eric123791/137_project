// imageSelect.js


function changeLogo()
{
	var oFormObj = document.getElementById("orderForm");
	var ticketType = oFormObj.ticketType.options[oFormObj.ticketType.selectedIndex].text;

	var imageObj = document.getElementById("logoplaceholder");



	if(ticketType == "NBA")
	{
		imageObj.src = "images/image2.jpg";
	}
	else if(ticketType == "NFL")
	{
		imageObj.src = "images/image3.jpg";
	}
	else if(ticketType == "MLB")
	{
		imageObj.src = "images/image4.jpg";
	}

}
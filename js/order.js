// order.js

function processOrder()
{
	var oFormObj = document.getElementById("orderForm");

	var ticketType = oFormObj.ticketType.options[oFormObj.ticketType.selectedIndex].text;
	var team = oFormObj.team.options[oFormObj.team.selectedIndex].text;
	var date = oFormObj.date.value;
	var numTickets = oFormObj.numTickets.value;

	if(validateDate(date))
	{
		alert(numTickets + " for " + ticketType + ", " + team + " on " + date);
	}
	else
	{
		alert("Invalid Date!");
	}
}

function validateDate(date)
{
	var today = new Date().toISOString().split('T')[0];
	if(date < today)
	{
		// date is in the past
		return false;
	}
	return true;
}
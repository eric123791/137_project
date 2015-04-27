// order.js

function processOrder()
{
	var oFormObj = document.getElementById("orderForm");

	var ticketType = oFormObj.ticketType.options[oFormObj.ticketType.selectedIndex].text;
	var team = oFormObj.team.options[oFormObj.team.selectedIndex].text;
	var date = oFormObj.date.value;
	var numTickets = oFormObj.numTickets.value;


	alert(numTickets + " for " + ticketType + ", " + team + " on " + date);

}

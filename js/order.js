// order.js

function processOrder()
{
	var oFormObj = document.getElementById("orderForm");
    var name = oFormObj.name.value;
    var email = oFormObj.email.value;
	var ticketType = oFormObj.ticketType.options[oFormObj.ticketType.selectedIndex].text;
	var team = oFormObj.team.options[oFormObj.team.selectedIndex].text;
	var date = oFormObj.date.value;
	var numTickets = oFormObj.numTickets.value;
	var everythingOK = true;

	if(!validateDate(date))
	{
		alert("Error: Invalid Date.");
		everythingOK = false;
	}

	if (!validateName(name))
	{
			alert("Error: Invalid Name.");
			everythingOK = false;
	}

	if (!validateEmail(email))
	{
			alert("Error: Invalid e-mail address.");
			everythingOK = false;
	}
	if(isNaN(numTickets))
	{
		alert("Error: Invalid Number of Tickets.");
		everythingOK = false;
	}

	if (everythingOK)
	{
			alert("All the information looks good.\nThank you!");
			return true;
	}
	else
			return false;
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

function validateName(name)
{
    var p = name.search(/^[-'\w\s]+$/);
    if (p == 0)
        return true;
    else
        return false;
}

function validateEmail(address)
{
    var p = address.search(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})$/);
    if (p == 0)
        return true;
    else
        return false;
}


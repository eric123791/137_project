// feedback.js

function processFeedback()
{
	var fbFormObj = document.getElementById("feedbackForm");

	var name = fbFormObj.name.value;
	var email = fbFormObj.email.value;
	var fbType = fbFormObj.type.options[fbFormObj.type.selectedIndex].text;
	var comments = fbFormObj.comments.value;
	var reply = fbFormObj.reply.checked;

	if(reply)
	{
		alert(name + ", " + email + ", " + fbType + " wants a reply. They said " + comments);
	}
	else
	{
		alert(name + ", " + email + ", " + fbType + " does not want a reply. They said " + comments);
	}
}

function validateFeedBackForm()
{
    var contactFormObj = document.getElementById("feedbackForm");
    var name = contactFormObj.name.value;
    var email = contactFormObj.email.value;
    var everythingOK = true;

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

    if (everythingOK)
    {
        alert("All the information looks good.\nThank you!");
        return true;
    }
    else
        return false;
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

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
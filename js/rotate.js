// rotate.js

var prefix = "images/image";

var imageArray = new Array(4);
for (i = 0; i < imageArray.length; i++)
{
	imageArray[i] = prefix + (i+1) + ".png";
}

var imageCounter = 0;

function rotate()
{
	var imageObj = document.getElementById("placeholder");
	imageObj.src = imageArray[imageCounter];
	++imageCounter;
	if (imageCounter == 4)
	{
		imageCounter = 0;
	}
}

function startRotation()
{
	document.getElementById("placeholder").src = imageArray[0];
	setInterval("rotate()", 3000);
}

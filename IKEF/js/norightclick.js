// Message for the alert box
var message = "Sorry, that function is disabled,\n\n for House Vampyr site\n\n If you would like something\n\n from our page, Please contact\n\n webmaster@warpdomain.com";

// Don't edit below!

function click(e) {
	if (document.all) {
		if (event.button == 2) {
			alert(message);
			return false;
		}
	}
	if (document.layers) {
		if (e.which == 3) {
			alert(message);
			return false;
		}
	}
}
if (document.layers) {
	document.captureEvents(Event.MOUSEDOWN);
}
document.onmousedown = click;
// -->

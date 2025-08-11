//<!---
var isNav = (navigator.appName.indexOf("Netscape") != -1);
// alert(isNav);
var x = navigator.appVersion;
y = x.substring(0, 4);

function closeit(a) {
	// alert(isNav);
	if (isNav) {
		eval(document.popbox.top = a)
	} else {
		popbox.innerHTML = ""
	}
}

function openit(pic) {
	// alert(isNav);
	a = 1;
	desc = "<table cellpadding=3 border=1 bgcolor=000000><td>"

	if (a == 1) {
		desc += '<EMBED SRC="'
				+ pic
				+ '" WIDTH=175, HEIGHT=160 CONTROLS=TRUE><br><CENTER><a href="javascript:closeit(-400)">Close this Window</a></CENTER>'
	}
	desc += "</td></table>"

	if (isNav) {
		document.popbox.document.write(desc)
		document.popbox.document.close()
		document.popbox.left = "x-50"
		document.popbox.top = y
		yy = eval(window.pageYOffset)
		xx = eval(window.pageXOffset)
		popbox.innerHTML = desc
		eval("document.popbox.left=" + (x - 50 + xx))
		eval("document.popbox.top=" + (eval(y - 200 + yy)))
	} else {

		yy = eval(document.body.scrollTop)
		xx = eval(document.body.scrollLeft)
		popbox.innerHTML = desc
		eval("popbox.style.pixelLeft=" + (x - 50 + xx))
		eval("popbox.style.pixelTop=" + (eval(y - 200 + yy)))
	}
}

function handlerMM(e) {
	x = (isNav) ? e.pageX : event.clientX
	y = (isNav) ? e.pageY : event.clientY
}

if (isNav) {
	document.captureEvents(Event.MOUSEMOVE);
}
document.onmousemove = handlerMM;

// -->

//<!---
var isNav = (navigator.appName.indexOf("Netscape") !=-1);
// alert(isNav);
var x = navigator.appVersion;
y = x.substring(0,4);
function closeit(a){
	if(isNav) 
	{
		var popbox = document.getElementById("popbox");
		popbox.top=a;
	}
	else 
	{
		var popbox = document.getElementById("popbox");
		popbox.top=a;
	}
	grayOut(false);
	removeElement("popbox");
}

  

function openit(a, b){
	grayOut(true);
	// alert("a "+a);
	// alert("b "+b);
	sc2001images = new Array();
	sc2001images[a]="";
	sc2001images[a] = new Image(300, 100);
	sc2001images[a].height="";
	sc2001images[a].src = b;
// alert(sc2001images[a].height);
// alert(sc2001images[a].width);
// alert(sc2001images[a].complete);
	c = b.substring(b.length-3,b.length);
// alert("c " + c);

	desc="<table class=redborder cellpadding=3 bgcolor=000000 align=center ><tr><td>"
		if ((c=="jpg")||(c=="gif")){
			desc+='<a href="' + b + '" target=_new><IMG SRC="' + b + '" WIDTH="' + sc2001images[a].width/2 + '"></a><br><CENTER><a href="javascript:closeit(-400);"><font face=KlingonDagger>Close this Window</font></a></CENTER>';
	
		}
		else if(c=="pdf"){
			//alert(b);
			desc+='<iframe src="' + b + '" width="400" ></iframe>';
			desc+='<CENTER><a href="' + b + '" width="400" target=_newpdf>Download pdf</a><br>';
			desc+='<a href="javascript:closeit(-400);"><font face=KlingonDagger>Close this Window</font></a></CENTER>';

		}
		else if(c=="zip"){
			//alert(b);
			desc+='<CENTER><a href="' + b + '" width="400" ><img src=http://www.housevampyr.com/training/library/zip.png width=75></a><br>';
			desc+='<a href="javascript:closeit(-400);"><font face=KlingonDagger>Close this Window</font></a></CENTER>';
	
		}
		else{
			desc+='<iframe src="' + b + '" width="400" height="325" style="border-width:2px; border-style:solid; border-color:Red"></iframe>';
			desc+='<CENTER><a href="javascript:closeit(-400);"><font face=KlingonDagger>Close this Window</font></a></CENTER>';

		}

	desc+="</td></tr></table>";
	// alert(desc);
//	 alert(isNav);
	if(isNav) {
		yy=eval(window.pageYOffset);
		xx=eval(window.pageXOffset);
		newElement(desc, "popbox");
		var popbox = document.getElementById("popbox");
		//popbox.position="absolute";
		popbox.style.left=(x-xx)+"px";
		popbox.style.top=(y)+"px";
	}
	else {
		yy=eval(document.body.scrollTop);
		xx=eval(document.body.scrollLeft);
		newElement(desc, "popbox");
		var popbox = document.getElementById("popbox");
		popbox.style.left=(x-xx)+"px";
		popbox.style.top=(y+yy-100)+"px";
	}
}

function handlerMM(e){
	x = (isNav) ? e.pageX : event.clientX;
	y = (isNav) ? e.pageY : event.clientY;
}

if (isNav){
	document.captureEvents(Event.MOUSEMOVE);
}
document.onmousemove = handlerMM;

function newElement(content, name) {
	  // Content what is going into the div
	  // name is well the Name
	  var div=document.getElementById(name);
	  if (!div) {
	    // The name layer doesn't exist, it's never been created.  So we'll
	    // create it here and apply some basic styles.
	    // If you are getting errors in IE see:
		// http://support.microsoft.com/default.aspx/kb/927917
	    var tbody = document.getElementsByTagName("body")[0];
	    var tnode = document.createElement('div');   // Create the layer.
	        tnode.style.position='absolute';         // Position absolutely
	        tnode.style.top='0px';                   // In the top
	        tnode.style.left='0px';                  // Left corner of the
														// page
	        tnode.style.overflow='hidden';           // Try to avoid making
														// scroll bars
	        tnode.style.display='block';             // Display Blocked
	        tnode.style.align='center';              // Align Center
		    tnode.style.zIndex=99;        
	        tnode.id=name; 					     // Name it so we can find it
													// later
	        tnode.innerHTML=content;			// give it content.
	    tbody.appendChild(tnode);                            // Add it to the
																// web page
	    dark=document.getElementById('darkenScreenObject');  // Get the
																// object.
	  }
	}

function removeElement(divNum) {
	  var d = document.getElementsByTagName("body")[0];
	  var olddiv = document.getElementById(divNum);
	  d.removeChild(olddiv);
	}

function grayOut(vis, options) {
	  // Pass true to gray out screen, false to ungray
	  // options are optional. This is a JSON object with the following
		// (optional) properties
	  // opacity:0-100 // Lower number = less grayout higher = more of a
		// blackout
	  // zindex: # // HTML elements with a higher zindex appear on top of the
		// gray out
	  // bgcolor: (#xxxxxx) // Standard RGB Hex color code
	  // grayOut(true, {'zindex':'50', 'bgcolor':'#0000FF', 'opacity':'70'});
	  // Because options is JSON opacity/zindex/bgcolor are all optional and
		// can appear
	  // in any order. Pass only the properties you need to set.
	  var options = options || {}; 
	  var zindex = options.zindex || 25;
	  var opacity = options.opacity || 70;
	  var opaque = (opacity / 100);
	  var bgcolor = options.bgcolor || '#000000';
	  var dark=document.getElementById('darkenScreenObject');
	  if (!dark) {
	    // The dark layer doesn't exist, it's never been created.  So we'll
	    // create it here and apply some basic styles.
	    // If you are getting errors in IE see:
		// http://support.microsoft.com/default.aspx/kb/927917
	    var tbody = document.getElementsByTagName("body")[0];
	    var tnode = document.createElement('div');           // Create the
																// layer.
	        tnode.style.position='absolute';                 // Position
																// absolutely
	        tnode.style.top='0px';                           // In the top
	        tnode.style.left='0px';                          // Left corner
																// of the page
	        tnode.style.overflow='hidden';                   // Try to avoid
																// making scroll
																// bars
	        tnode.style.display='none';                      // Start out
																// Hidden
	        tnode.id='darkenScreenObject';                   // Name it so we
																// can find it
																// later
	    tbody.appendChild(tnode);                            // Add it to the
																// web page
	    dark=document.getElementById('darkenScreenObject');  // Get the
																// object.
	  }
	  if (vis) {
	    // Calculate the page width and height 
	    if( document.body && ( document.body.scrollWidth || document.body.scrollHeight ) ) {
	        var pageWidth = document.body.scrollWidth+'px';
	        var pageHeight = document.body.scrollHeight+'px';
	    } else if( document.body.offsetWidth ) {
	      var pageWidth = document.body.offsetWidth+'px';
	      var pageHeight = document.body.offsetHeight+'px';
	    } else {
	       var pageWidth='100%';
	       var pageHeight='100%';
	    }   
	    //set the shader to cover the entire page and make it visible.
	    dark.style.opacity=opaque;                      
	    dark.style.MozOpacity=opaque;                   
	    dark.style.filter='alpha(opacity='+opacity+')'; 
	    dark.style.zIndex=zindex;        
	    dark.style.backgroundColor=bgcolor;  
	    dark.style.width= pageWidth;
	    dark.style.height= pageHeight;
		dark.style.display='block';
	    //dark.style.display='table';				 
	  } else {
	     dark.style.display='none';
	  }
}

//-->


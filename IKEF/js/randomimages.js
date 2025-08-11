var random_images_array = [ "ikefaqilah.jpg", "ikefdemonclaw.jpg", "ikefdoomslayer.jpg", "ikefhuntress.jpg", "ikefkdot.jpg", "ikefkmpec.jpg", "ikefneghvar.jpg", "ikvaqilah1.jpg",
      "iksmysticvampyr.jpg", "ikvtumidswrath.jpg", "iksshiloh.jpg", "" ];
var random_images_link_array = [ "ikvaqilah.html", "ikvdemonclaw.html", "ikvdoomslayer.html", "ikvhuntress.html", "ikvkdot.html", "ikvkmpec.html", "iksneghvar.html",
      "ikvaqilah.html", "iksmysticvampyr.html", "", "ikvtihab.html", "iksshiloh.html" ];
var path = "http://www.ikefklingons.com/images/ships/";
var linkPath = "http://www.ikefklingons.com/sectors/ships/";
var ikefText = "A Glorious Ship of the IKEF<br>";
var ikefText2 = "IKEF is Glorious! Qapla'!<br>";
var ikefImgStr = '<img id="table-ships-logo" src="http://www.ikefklingons.com/images/IKEFwebbanner.jpg" alt = "">';

function getRandomImageFull(random_images_array, path) {
   path = path || 'http://www.ikefklingons.com/images/ships/'; // default path here
   var num = Math.floor(Math.random() * random_images_array.length);
   var img = random_images_array[num];
   var imgStr = '<img src="' + path + img + '" alt = "">';
   document.write(imgStr);
   document.write("GLORY");
   document.close();
}

function getRandomImage() {
   path = 'http://www.ikefklingons.com/images/ships/'; // default path here
   arryLength = random_images_array.length;
   var num = Math.floor(Math.random() * arryLength);
   var img = random_images_array[num];
   var link = random_images_link_array[num];
   var imgStr = '';
   document.write('<table id="table-ships">');
   if (img != "") {
      imgStr = '<img src="' + path + img + '" alt = "">';
      if (link != "") {
         linkStr = '<a href="' + linkPath + link + '">' + imgStr + '</a>';
         document.write('<tr>');
         document.write('<td id="table-ships-header">');
         document.write('<div class="ships">' + ikefText + '</div>');
         document.write('</td>');
         document.write('</tr>');
         document.write('<tr>');
         document.write('<td id="table-ships-header">');
         document.write(linkStr);
         document.write('</td>');
      } else {
         document.write('<tr>');
         document.write('<td id="table-ships-header">');
         document.write('<div class="ships">' + ikefText2 + '</div>');
         document.write('</td>');
         document.write('</tr>');
         document.write('<tr>');
         document.write('<td id="table-ships-header">');
         document.write(ikefImgStr);
         document.write('</td>');
         document.write('</tr>');
      }
   } else {
      document.write('<tr>');
      document.write('<td id="table-ships-header">');
      document.write('<div class="ships">' + ikefText2 + '</div>');
      document.write('</td>');
      document.write('</tr>');
      document.write('<tr>');
      document.write('<td id="table-ships-header">');
      document.write(ikefImgStr);
      document.write('</td>');
      document.write('</tr>');
   }
   document.write('</tr>');
   document.write('</table>');
   document.close();
}
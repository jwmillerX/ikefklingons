<?php
/*
 * Created on Mar 9, 2009
 * notes.php
 * jomiller
 * Copyright House VamPyr 
 * The VamPyr's belong to a small religious and mysterious Klingon Family line called "The Family of Blood". The VamPyr's come from a small obscure Klingon colony world located on the opposite side of the Klingon Empire from Federation Space. After defeating an enemy in battle this family line has a ritual of drinking the blood of the vanquished in order to gain their life energy. Whether or not this is based in fact; most races including Klingons give the VamPyr a wide berth. 
 * Visit our Web Site http://housevampyr.com/
 * 
 * 
 */

function getImagesFromDir($path) {
	//echo "This is where we are looking " . $path;
	$images = array();
	if ( $img_dir = @opendir($path) ) {
		while ( false !== ($img_file = readdir($img_dir)) ) {
			// checks for gif, jpg, png
			if ( preg_match("/(\.gif|\.jpg|\.png)$/", $img_file) ) {
				$images[] = $img_file;
			}
		}
		closedir($img_dir);
	}
	return $images;
}

function getRandomFromArray($ar) {
	mt_srand( (double)microtime() * 1000000 ); // php 4.2+ not needed
	$num = array_rand($ar);
	return $ar[$num];
}

// returns true if $needle is a substring of $haystack
function contains($needle, $haystack)
{
	return strpos($haystack, $needle) !== false;
}

$imgList = getImagesFromDir('images/ships/');

$img = getRandomFromArray($imgList);
$fullImageUrl = $images . "ships/" . $img;

// if (contains($img, "hvad.jpg")) {
// 	$myLink="http://www.housevampyr.com";
// } else if (contains($img, "rickssdb.jpg")) {
// 	$myLink="https://www.etsy.com/shop/SpacementDesign?utm_medium=ShopHomeTools&utm_campaign=Share&utm_source=Facebook&share_time=152176857500";
// } else if (contains($img, "ikef.gif")) {
// 	$myLink="https://www.facebook.com/groups/IKEF1";
// } else if (contains($img, "kag_small.gif")) {
// 	$myLink="https://www.kag.org/";
// } else if (contains($img, "tradewindsad.jpg")) {
// 	$myLink="http://www.tradewindscostumes.us/index.html";
// } else {
// 	$myLink="http://www.housevampyr.com";
// }

$imgtext='<table align="center" width="250" bgcolor="#000000" cellpadding="4" border="1" bordercolor="#AA0000"><tr><td align="center">Sponsors<br>' . 
//"<a href=\"javascript:sendtonewwindow('".$fullImageUrl."', '3', '')\">" .
'<a href="'.$myLink.'" target="_new"><img src="'.$fullImageUrl.'" width="300"></a></td></tr></table>';
//'<img src="'.$fullImageUrl.'" width="150"></td></tr></table>';

?>
<div  id="Ads"><?php echo $imgtext ?></div>
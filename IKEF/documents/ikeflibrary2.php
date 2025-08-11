<!-- 'Copyright 2003 House Vampyr' -->
<!-- This software is property of House Vampyr. -->
<!-- Any attempt to reproduce, copy or modify this software is strictly forbidden -->
<!-- All violators will be prosecuted to the full extent of the law -->
<?php

require 'dbutils/DisplayTable.php';

// Create a new DisplayTable object
$dt = new DisplayTable();

$dirLoc = "/home/lordvampyr/ikefklingons/documents/books/";
$files = $dt->directoryToArray($dirLoc, true, false);
sort($files);

$num_of_rows = count($files);

$home='http://www.ikefklingons.com/';
echo ('<html>');
echo ('<head>');
echo ('<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">');
echo ('<meta name="author" content="">');
echo ('<meta name="description" content="IKEF is a Star Trek fan organization devoted to the portrayal of the Klingon Culture.  We have NO Membership dues!  Since 1997 the IKEF has been helping members learn what it means to be a Klingon Warrior! Come join us and discover the mysteries behind the legendary rites of the warrior race! Membership is FREE!!!#10;">');
echo ('<meta name="keywords" content="IKF, Imperial Klingon Forces, Klingon, costumes, tlhIngan, tlhIngan Hol, Klingon Fan Club, Klingon Club, Klingons, Organization, Fun, betleH, fighting, IKF, Star Trek, Star, Trek, Trekkies 2, Trekkies, Klingon Swords,Quartermaster, IKV, Costume, Makeup Creation, Acting, Improv, Skill development, Prop Making, Language, Culture, Parties, Conventions, Gatherings, Role Play,Gaming, On-Line">');
//echo ('<title>IKEF</title>');
echo ('<link rel="stylesheet" type="text/css" href="' . $home . 'css/addons.css">');
echo ('<link rel="stylesheet" type="text/css" href="' . $home . 'css/fonts.css">');
echo ('<link rel="stylesheet" type="text/css" href="' . $home . 'css/customhtml.css">');
echo ('<link rel="stylesheet" type="text/css" href="' . $home . 'css/advDefault.css">');
echo ('<link rel="stylesheet" type="text/css" href="' . $home . 'theme/css/ikefklingons.css">');
echo ('<SCRIPT LANGUAGE="JavaScript" src="' . $home . 'js/norightclick.js"></SCRIPT>');
echo ('<SCRIPT Language="JavaScript" src="' . $home . 'documents/library.js"></SCRIPT>');
echo ('<link rel="icon" type="image/x-icon" href="http://klingonsofikef.tripod.com/favicon.ico?t=1521681378">');

echo ('</head>');
echo ('<body id="body">');
echo ('<div class="container">');
echo ('<left> <img src="http://www.ikefklingons.com/images/ikefsymbol4.jpg" height="200" alt="ikefsymbol4.jpg"></left>');
echo ('<left> <img src="http://www.ikefklingons.com/images/IKEFwebbanner.jpg" height="200" alt="IKEFwebbanner.jpg"> <right> <img src="http://www.ikefklingons.com/images/ikefsymbol4.jpg" height="200" alt="ikefsymbol4.jpg"></right>');
echo ('</div>');
echo ('<font face="impact" color="#FF0000">');
echo ('<div>');
//<!-- do not add styling to this div -->
echo ('<div class="container-links">');
echo ('<table id="table-links">');
echo ('<tr>');
echo ('<td>');
echo ('<a href="http://www.ikefklingons.com/index.html" class="selected" title="Home">Home</a>');
echo ('</td>');
echo ('<td>');
echo ('<a href="http://www.ikefklingons.com/sectors/sectors.html" title="Sectors">Sectors</a>');
echo ('</td>');
echo ('<td>');
echo ('<a href="http://www.ikefklingons.com/departments/departments.html" title="Departments">Departments</a>');
echo ('</td>');
echo ('<td>');
echo ('<a href="http://www.ikefklingons.com/highcouncil/highcouncil.html" title="High Council">IKEF High Council</a>');
echo ('</td>');
echo ('<td>');
echo ('<a href="http://www.ikefklingons.com/marines/marines.html" title="IKEF Marines">IKEF Marines</a>');
echo ('</td>');
echo ('<td>');
echo ('<a href="http://www.ikefklingons.com/communications/" target="_comm" title="IKEF Forum">IKEF Forum</a>');
echo ('</td>');
echo ('<td>');
echo ('<a href="https://form.jotform.com/91735355836163" title="Chain of Command/Operations">Join IKEF</a>');
echo ('</td>');
echo ('</tr>');
echo ('</table>');
echo ('</div>');
echo ('</div>');
echo ('<div>');
echo ('<div>');
echo ('<h3></h3>');
echo ('</div>');
echo ('</div>');
echo ('<div>');
echo ('<div>');
echo ('<hr>');
echo ('</div>');
echo ('</div>');

echo ('<TR style="text-align:center;" colspan="4"><TD colspan="4">');
echo "<div style='background-color: #000000'>Note: These are very large files and take minutes to download.</div>";
echo ('</TD></TR>');

//echo "<script>alert('num_of_rows ". $num_of_rows ."');</script>";
for ($count = 0; $count < $num_of_rows; $count ++) {
    
    echo ('<TR ALIGN="center" VALIGN="middle" COLSPAN="2">');
    echo ('<TD ALIGN="center" VALIGN="middle" WIDTH="225" style="background-image:url(' . $home . 'documents/books/images/book');
    srand((double) microtime() * 1000000);
    $random_number = rand(0, 10);
    echo ($random_number);
    echo ('.gif);background-repeat: no-repeat; background-position:center; background-size: 95%; filter:alpha(opacity=45); -moz-opacity:0.45; opacity:0.45;">');
    echo ('<div style="border: 0px solid #000000; width:60%; height:100%; z-index: 5; filter:alpha(opacity=95);-moz-opacity:0.95;opacity:0.95;">');
    echo ('<A HREF="javascript:void(0)" onClick="openit(');
    echo ($count);
    echo (",'");
    echo ($home);
    echo ('documents/books/' . substr($files[$count], strlen($dirLoc), (strlen($files[$count]) - strlen($dirLoc))));
    echo ("')");
    echo (';"><font size=2 color=#FFFFFF >');
    echo (substr($files[$count], strlen($dirLoc), ((strlen($files[$count]) - strlen($dirLoc)) - 4)) . '</font></A></div></TD>');
    
    echo ('<TD ALIGN="center" VALIGN="middle" WIDTH="225" style="background-image:url(' . $home . 'documents/books/images');
    $count ++;
    srand((double) microtime() * 1000000);
    $random_number = rand(0, 10);
    echo ($random_number);
    echo ('.gif);background-repeat: no-repeat; background-position:center; filter:alpha(opacity=45);-moz-opacity:0.45;opacity:0.45;">');
    if ($count < $num_of_rows) {
        echo ('<div style="border: 0px solid #000000; width:60%; height:100%;z-index: 5; filter:alpha(opacity=95);-moz-opacity:0.95;opacity:0.95;">');
        echo ('<A HREF="javascript:void(0)" onClick="openit(');
        echo ($count);
        echo (",'");
        echo ($home);
        echo ('documents/books/' . substr($files[$count], strlen($dirLoc), (strlen($files[$count]) - strlen($dirLoc))));
        echo ("')");
        echo (';"><font size=2 color=#FFFFFF >');
        echo (substr($files[$count], strlen($dirLoc), ((strlen($files[$count]) - strlen($dirLoc)) - 4)) . '</font></A></div></TD>');
    }
    echo ('</TR>');
}
echo ('</TD></TR>');
echo ("</table></div>");
echo ('</body>');
echo ('</html>');
?>



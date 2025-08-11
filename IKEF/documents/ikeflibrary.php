<?php


// ---------------------------------------------
function directoryToArray($directory, $recursive, $include_directories_in_list) {
    $array_items = array ();
    if ($handle = opendir ( $directory )) {
        while ( false !== ($file = readdir ( $handle )) ) {
            if ($file != "." && $file != "..") {
                if (is_dir ( $directory . "/" . $file )) {
                    if ($recursive) {
                        $array_items = array_merge ( $array_items, directoryToArray ( $directory . "/" . $file, $recursive ) );
                    }
                    if ($include_directories_in_list) {
                        $file = $directory . "/" . $file;
                        $array_items [] = preg_replace ( "/\/\//si", "/", $file );
                    }
                } else {
                    $file = $directory . "/" . $file;
                    $array_items [] = preg_replace ( "/\/\//si", "/", $file );
                }
            }
        }
        closedir ( $handle );
    }
    return $array_items;
}
//require 'dbutils/DisplayTable.php';

// Create a new DisplayTable object
//$dt = new DisplayTable();

$dirLoc = "/home/lordvampyr/ikefklingons/documents/books/";
$files = directoryToArray($dirLoc, true, false);
sort($files);

$num_of_rows = count($files);

$home='http://www.ikefklingons.com/';
echo ('<html>');
echo ('<head>');
echo ('<title>IKEF</title>');
echo ('<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">');
echo ('<meta name="author" content="">');
echo ('<meta name="description" content="IKEF is a Star Trek fan organization devoted to the portrayal of the Klingon Culture.  We have NO Membership dues!  Since 1997 the IKEF has been helping members learn what it means to be a Klingon Warrior! Come join us and discover the mysteries behind the legendary rites of the warrior race! Membership is FREE!!!#10;">');
echo ('<meta name="keywords" content="IKF, Imperial Klingon Forces, Klingon, costumes, tlhIngan, tlhIngan Hol, Klingon Fan Club, Klingon Club, Klingons, Organization, Fun, betleH, fighting, IKF, Star Trek, Star, Trek, Trekkies 2, Trekkies, Klingon Swords,Quartermaster, IKV, Costume, Makeup Creation, Acting, Improv, Skill development, Prop Making, Language, Culture, Parties, Conventions, Gatherings, Role Play,Gaming, On-Line">');
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
echo ('<!-- Banner -->');
echo ('<script type="text/javascript" src="http://www.ikefklingons.com/theme/js/banner.js"></script>');

echo ('<br>');
echo ('<br>');
echo ('<TABLE id="table-books">');
echo ('<TR><TD id="table-books" colspan="2">');
echo ('<div>');
echo ('<font face="klingondagger" color="#AA0000">');
echo ('Note: These are very large files and take minutes to download.</div>');
echo ('</font>');
echo ('</TD></TR>');

//echo "<script>alert('num_of_rows ". $num_of_rows ."');</script>";
for ($count = 0; $count < $num_of_rows; $count ++) {
    
    echo ('<TR style="text-align:center;">');
    echo ('<TD id="table-books-links" WIDTH="225" style="background-image:url(' . $home . 'documents/images/book');
    srand((double) microtime() * 1000000);
    $random_number = rand(0, 10);
    echo ($random_number);
    echo ('.gif);background-repeat: no-repeat; background-position:center; background-size: 75%; filter:alpha(opacity=45); -moz-opacity:0.45; opacity:0.45;">');
    echo ('<div style="border: 0px solid #000000; width:60%; height:100%; z-index: 5; filter:alpha(opacity=95);-moz-opacity:0.95;opacity:0.95;">');
    echo ('<a id="table-books-links" href="javascript:void(0)" onClick="openit(');
    echo ($count);
    echo (",'");
    echo ($home);
    echo ('documents/books/' . substr($files[$count], strlen($dirLoc), (strlen($files[$count]) - strlen($dirLoc))));
    echo ("')");
    echo (';">');
    echo (substr($files[$count], strlen($dirLoc), ((strlen($files[$count]) - strlen($dirLoc)) - 4)) . '</font></A></div></TD>');
    
    echo ('<TD id="table-books-links" WIDTH="225" style="background-image:url(' . $home . 'documents/images/book');
    $count ++;
    srand((double) microtime() * 1000000);
    $random_number = rand(0, 10);
    echo ($random_number);
    echo ('.gif);background-repeat: no-repeat; background-position:center; background-size: 75%; filter:alpha(opacity=45);-moz-opacity:0.45;opacity:0.45;">');
    if ($count < $num_of_rows) {
        echo ('<div style="border: 0px solid #000000; width:60%; height:100%;z-index: 5; filter:alpha(opacity=95);-moz-opacity:0.95;opacity:0.95;">');
        echo ('<a id="table-books-links" href="javascript:void(0)" onClick="openit(');
        echo ($count);
        echo (",'");
        echo ($home);
        echo ('documents/books/' . substr($files[$count], strlen($dirLoc), (strlen($files[$count]) - strlen($dirLoc))));
        echo ("')");
        echo (';">');
        echo (substr($files[$count], strlen($dirLoc), ((strlen($files[$count]) - strlen($dirLoc)) - 4)) . '</font></A></div></TD>');
    }
    echo ('</TR>');
}
echo ('</TD></TR>');
echo ('</table></div>');
echo ('<br>');
echo ('<br>');

echo ('<!-- Footer -->');
echo ('<script type="text/javascript" src="http://www.ikefklingons.com/theme/js/footer.js"></script>');
echo ('</body>');
echo ('</html>');
?>


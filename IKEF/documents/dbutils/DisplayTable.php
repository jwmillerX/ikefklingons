<?php

/*
 * DisplayTable.php - A class of simple Table utilities.
 *
 */
class DisplayTable {
	
	// Database connection object
	private $rsTable;
	private $title;
	private $location;
	
	// Create a PDO object and connect to the database4
	public function __construct() {
	}
	// -------------------------------------------------------
	/* Displays a record set in table format */
	public function DisplayTable($rsTable, $title, $location) {
		$fieldnum = sizeof ( $rsTable );
		// echo "<script>alert('fieldnum ".$fieldnum."');</script>";
		if ($fieldnum == 0) {
			echo " Table is Empty.";
		} else {
			$colHeaders = array_keys ( $rsTable [0] );
			$this->headerInfo ( sizeof ( $colHeaders ), $title, $location );
			// echo "<pre>" . print_r ( $rsTable, true ) . "</pre>";
			echo ("<tr>");
			for($count = 0; $count < sizeof ( $colHeaders ); $count ++) {
				$field = $colHeaders [$count];
				// echo "<script>alert('field ".$field."');</script>";
				echo ("<td align=center>" . str_replace ( '_', ' ', $field ) . "</td>");
			}
			echo ("</tr>");
			for($count = 0; $count < $fieldnum; $count ++) {
				echo ("<tr>");
				for($count2 = 0; $count2 < sizeof ( $colHeaders ); $count2 ++) {
					$result = $rsTable [$count] [$colHeaders [$count2]];
					// echo "<script>alert('result ".$result."');</script>";
					if (strlen ( $result ) <= 0) {
						echo ("<td align=center>&nbsp;</td>");
					} else {
						// echo " < script > alert('Should be an image ".stristr($result,' gif ')."');</script> ";
						if (strlen ( stristr ( $result, '.gif' ) ) > 0) {
							// $imagesize = getimagesize($result);
							list ( $width, $height, $type, $attr ) = getimagesize ( $result );
							if ($width > 100) {
								// echo " < script > alert('width ".$width."');</script>";
								echo ("<td align=center><img src= \"" . $result . "\" width=100></td>");
							} else {
								echo "<script>alert('result " . $result . "');</script>";
								echo ("<td align=center><img src=\"" . $result . "\"></td>");
							}
						} else if (strlen ( stristr ( $result, 'jpg' ) ) > 0) {
							echo ("<td align=center><img src=\"" . $result . "\" width=100></td>");
						} else if ((strlen ( stristr ( $result, 'http://' ) ) > 0) && (strlen ( stristr ( $result, 'gif' ) ) > 0)) {
							echo ("<td align=center>< a href=\"" . $result . "\">" . $result . "</td>");
						} else if ($field == "Details") {
							echo ("<td align=center>");
							echo ("<div style='BORDER-RIGHT: #AA0000 2px solid; BORDER-TOP: #AA0000 2px solid; OVERFLOW: auto; BORDER-LEFT: #AA0000 2px solid; BORDER-BOTTOM: #AA0000 2px solid; HEIGHT: 150px; width: 350px; auto'>");
							echo ($result);
							echo ("</div>");
							echo ("</td>");
						} else {
							echo ("<td align=center>" . $result . "</td>");
						}
					}
				}
				echo ("</tr>");
			}
			echo ("</table>");
			$this->footerinfo ( $location );
		}
	}
	
	// -------------------------------------------------------
	/* Displays a record set in table format */
	function DisplayBiosTable($rsTable, $title, $location) {
		
		// Create a new DisplayTable object
		$dt = new DisplayTable ();
		
		$CharacterName = '';
		$DOB = '';
		$POB = '';
		$SciRat = '';
		// echo "<pre>" . print_r ( $rsTable, true ) . "</pre>";
		
		$rsTableCount = sizeof ( $rsTable );
		$colHeaders = array_keys ( $rsTable [0] );
		// echo "<pre>" . print_r ( $colHeaders, true ) . "</pre>";
		$colHeadersCount = sizeof ( $colHeaders );
		// echo "<script>alert('" . $colHeadersCount . "');</script>";
		if ($rsTableCount == 0) {
			echo " Table is Empty.";
		} else {
			$this->headerInfoBios ( $colHeadersCount, $title, $location );
			echo ("<tr>");
			for($count = 0; $count < $colHeadersCount; $count ++) {
				$field = $colHeaders [$count];
				// echo "<script>alert('" . $field . "');</script>";
				if (($field != "Sci_Rating") && ($field != "DOB") && ($field != "POB") && ($field != "Current_Assignment") && ($field != "Position")) {
					echo ("<td align=center>" . str_replace ( '_', ' ', $field ) . "</td>");
				}
			}
			echo ("</tr>");
			for($count = 0; $count < $rsTableCount; $count ++) {
				echo ("<tr>");
				// echo " < script > alert('".$field."');< / script > ";
				// echo " < script > alert('".$rsTableCount."');< / script > ";
				for($count2 = 0; $count2 < $colHeadersCount; $count2 ++) {
					$field = $colHeaders [$count2];
					$result = $rsTable [$count] [$colHeaders [$count2]];
					
					if (strlen ( $result ) <= 0) {
						if (($field != "Sci_Rating") && ($field != "DOB") && ($field != "POB") && ($field != "Current_Assignment") && ($field != "Position")) {
							echo ("<td align=center>&nbsp;</td>");
						}
					} else {
						if ($field == "CharacterName") {
							$CharacterName = $result;
						}
						if ($field == "Sci_Rating") {
							$SciRat = $result;
						}
						if ($field == "DOB") {
							$DOB = $result;
						}
						if ($field == "POB") {
							$POB = $result;
						}
						if ($field == "Current_Assignment") {
							$CA = $result;
						}
						if ($field == "Position") {
							$Position = $result;
						}
						// echo "<script>alert('".$CA."');</script>";
						// echo "<script>alert('".$Position."');</script>";
						
						// echo " < script > alert('Should be an image ".stristr($result,' gif ')."');</script> ";
						if (strlen ( stristr ( $result, '.gif' ) ) > 0) {
							// $imagesize = getimagesize($result);
							list ( $width, $height, $type, $attr ) = getimagesize ( $result );
							if ($width > 100) {
								// echo " < script > alert('width ".$width."');</script>";
								echo ("<td align=center><img src= \"" . $result . "\" width=100></td>");
							} else {
								echo "<script>alert('result " . $result . "');</script>";
								echo ("<td align=center><img src=\"" . $result . "\"></td>");
							}
						} else if (strlen ( stristr ( $result, 'jpg' ) ) > 0) {
							echo ("<td align=center><img src=\"" . $result . "\" width=100></td>");
						} else if ((strlen ( stristr ( $result, 'http://' ) ) > 0) && (strlen ( stristr ( $result, 'gif' ) ) > 0)) {
							echo ("<td align=center>< a href=\"" . $result . "\">" . $result . "</td>");
						} else if ($field == "Details") {
							// echo " <script>alert('result ".$result."');</script>";
							echo ("<td align=center>");
							echo ("<A HREF=\"javascript:void(0)\" onClick=\"openit(0,'http://www.housevampyr.com/bios/bios/biosdyn.html?KlinName=");
							echo (rawurlencode ( $CharacterName ));
							echo ("&DOB=");
							echo (rawurlencode ( $DOB ));
							echo ("&POB=");
							echo (rawurlencode ( $POB ));
							echo ("&SciRat=");
							echo (rawurlencode ( $SciRat ));
							echo ("&CA=");
							echo (rawurlencode ( $CA ));
							echo ("&Position=");
							echo (rawurlencode ( $Position ));
							echo ("&Desc=");
							echo (rawurlencode ( $result ));
							echo ("');");
							echo ("\">Bio...</a>");
							echo ("</td>");
						} else {
							if (($field != "Sci_Rating") && ($field != "DOB") && ($field != "POB") && ($field != "Current_Assignment") && ($field != "Position")) {
								echo ("<td align=center>" . $result . "</td>");
							}
						}
					}
				}
				echo ("</tr>");
			}
			echo ("</table></div>");
		}
	}
	
	// -------------------------------------------------------
	/* Displays a record set in table format */
	function DisplayTableBar($rsTable, $title, $location) {
		if (sizeof ( $rsTable ) == 0) {
			echo "<table class=\"redborder\" align=\"center\" bgcolor=\"#000000\"><tr><td>";
			echo " Table did not contain your search criteria.<br>";
			echo "</td></tr></table>";
		} else {
			$rsTableCount = sizeof ( $rsTable );
			$colHeaders = array_keys ( $rsTable [0] );
			// echo "<pre>" . print_r ( $colHeaders, true ) . "</pre>";
			$colHeadersCount = sizeof ( $colHeaders );
			// echo "<script>alert('" . $colHeadersCount . "');</script>";
			echo "<table class=\"redborder\" align=\"center\" bgcolor=\"#000000\"><tr><td>";
			echo ("<tr class=\"red\">");
			for($count = 0; $count < $colHeadersCount; $count ++) {
				$field = $colHeaders [$count];
				if ($field == "DR_KEY") {
				} else {
					echo ("<td  align=center>");
					echo ("<div style='BORDER-RIGHT: #AA0000 2px solid; BORDER-TOP: #AA0000 2px solid; OVERFLOW: auto; BORDER-LEFT: #AA0000 2px solid; BORDER-BOTTOM: #AA0000 2px solid; auto'>");
					echo (str_replace ( '_', ' ', $field ));
					echo ("</div>");
					echo ("</td>");
				}
			}
			echo ("</tr>");
			for($count = 0; $count < $rsTableCount; $count ++) {
				echo ("<tr >");
				for($count2 = 0; $count2 < $colHeadersCount; $count2 ++) {
					$field = $colHeaders [$count2];
					$result = $rsTable [$count] [$field];
					
					// echo "<script> alert('".$field."');</script> ";
					if ($field == "DR_KEY") {
					} else {
						echo ("<td align=center>");
						// echo "<script>alert('Result " . strlen ( $result ) . "');</script>";
						if (strlen ( $result ) <= 0) {
							echo ("<div style='BORDER-RIGHT: #AA0000 2px solid; BORDER-TOP: #AA0000 2px solid; OVERFLOW: auto; BORDER-LEFT: #AA0000 2px solid; BORDER-BOTTOM: #AA0000 2px solid; HEIGHT: 150px; auto'>");
							echo ("&nbsp;");
							echo ("</div>");
						} else {
							// echo " < script > alert('Should be an image ".stristr($result,' gif ')."');</script> ";
							if (strlen ( stristr ( $result, 'gif' ) ) > 0) {
								// $imagesize = getimagesize($result);
								list ( $width, $height, $type, $attr ) = getimagesize ( $result );
								if ($width > 100) {
									// echo " < script > alert('width ".$width."');</script>";
									echo ("<div style='BORDER-RIGHT: #AA0000 2px solid; BORDER-TOP: #AA0000 2px solid; OVERFLOW: auto; BORDER-LEFT: #AA0000 2px solid; BORDER-BOTTOM: #AA0000 2px solid; HEIGHT: 150px; auto'>");
									echo ("<img src= \"" . $result . "\" width=100>");
									echo ("</div>");
								} else {
									echo ("<div style='BORDER-RIGHT: #AA0000 2px solid; BORDER-TOP: #AA0000 2px solid; OVERFLOW: auto; BORDER-LEFT: #AA0000 2px solid; BORDER-BOTTOM: #AA0000 2px solid; HEIGHT: 150px; auto'>");
									echo ("<img src=\"" . $result . "\">");
									echo ("</div>");
								}
							} else if (strlen ( stristr ( $result, 'jpg' ) ) > 0) {
								echo ("<div style='BORDER-RIGHT: #AA0000 2px solid; BORDER-TOP: #AA0000 2px solid; OVERFLOW: auto; BORDER-LEFT: #AA0000 2px solid; BORDER-BOTTOM: #AA0000 2px solid; HEIGHT: 150px; auto'>");
								echo ("<img src= \"" . $result . "\" width=100>");
								echo ("</div>");
							} else if ((strlen ( stristr ( $result, 'http://' ) ) > 0) && (strlen ( stristr ( $result, 'gif' ) ) > 0)) {
								echo ("<div style='BORDER-RIGHT: #AA0000 2px solid; BORDER-TOP: #AA0000 2px solid; OVERFLOW: auto; BORDER-LEFT: #AA0000 2px solid; BORDER-BOTTOM: #AA0000 2px solid; HEIGHT: 150px; auto'>");
								echo ("< a href=\"" . $result . "\">" . $result . "</a>");
								echo ("</div>");
							} else if (($field == "INGREDIENTS") || ($field == "DIRECTIONS")) {
								echo ("<div style='BORDER-RIGHT: #AA0000 2px solid; BORDER-TOP: #AA0000 2px solid; OVERFLOW: auto; BORDER-LEFT: #AA0000 2px solid; BORDER-BOTTOM: #AA0000 2px solid; HEIGHT: 150px; width: 300px; auto'>");
								echo (str_replace ( "\r\n", "<br>", $result ));
								echo ("</div>");
							} else {
								echo ("<div style='BORDER-RIGHT: #AA0000 2px solid; BORDER-TOP: #AA0000 2px solid; OVERFLOW: auto; BORDER-LEFT: #AA0000 2px solid; BORDER-BOTTOM: #AA0000 2px solid; HEIGHT: 150px; auto'>");
								echo ($result);
								echo ("</div>");
							}
						}
					}
					echo ("</td>");
				}
				echo ("</tr>");
			}
			echo ("</table></div>");
		}
	}
	// -------------------------------------------------------
	/* Displays a record set in table format */
	function DisplayTableLibrary($rsTable, $title, $location) {
		$bookimages = "http://www.housevampyr.com/images/training/library/";
		$this->headerInfoLibrary ( 9, $title, $location );
		if (sizeof ( $rsTable ) == 0) {
			$this->DisplayError ( "Table did not contain your search criteria.<br>", "center" );
		} else {
			$rsTableCount = sizeof ( $rsTable );
			// echo "<pre>" . print_r ( $rsTableCount, true ) . "</pre>";
			$colHeaders = array_keys ( $rsTable [0] );
			// echo "<pre>" . print_r ( $colHeaders, true ) . "</pre>";
			$colHeadersCount = sizeof ( $colHeaders );
			// echo "<script>alert('" . $colHeadersCount . "');</script>";
			echo ("<tr>");
			for($count = 0; $count < $colHeadersCount; $count ++) {
				$field = $colHeaders [$count];
				// echo "<script>alert('" . $field . "');</script>";
				if ($field == "BookUrlShort") {
					$field = "Book Cover";
				}
				echo ("<td align=center>" . str_replace ( '_', ' ', $field ) . "</td>");
			}
			echo ("</tr>");
			for($count = 0; $count < $rsTableCount; $count ++) {
				echo ("<tr>");
				// echo "<script>alert('".$field."');</script>";
				for($count2 = 0; $count2 < $colHeadersCount; $count2 ++) {
					$field = $colHeaders [$count2];
					$result = $rsTable [$count] [$field];
					// echo "<script> alert('".$field."');</script> ";
					if (strlen ( $result ) <= 0) {
						echo ("<td align=center>&nbsp;</td>");
					} else {
						if ($field == "Book_Title") {
							$BookName = $result;
						}
						if ($field == "Book_Description") {
							$Desc = $result;
						}
						
						// echo " <script> alert('Should be an image ".stristr($result,' gif ')."');</script> ";
						if (strlen ( stristr ( $result, 'gif' ) ) > 0) {
							// $imagesize = getimagesize($result);
							list ( $width, $height, $type, $attr ) = getimagesize ( $result );
							if ($width > 100) {
								// echo " <script> alert('width ".$width."');</script>";
								echo ("<td align=center><img src= \"" . $bookimages . $result . "\" width=100></td>");
							} else {
								// echo "<script>alert('result " . $result . "');</script>";
								echo ("<td align=center><img src=\"" . $result . "\"></td>");
							}
						} else if (strlen ( stristr ( $result, 'jpg' ) ) > 0) {
							echo ("<td align=center><img src=\"" . $bookimages . $result . "\" width=100></td>");
						} else if ((strlen ( stristr ( $result, 'http://' ) ) > 0) && (strlen ( stristr ( $result, 'gif' ) ) > 0)) {
							echo ("<td align=center>< a href=\"" . $result . "\">" . $result . "</td>");
						} else if (($field == "lb_Description")) {
							echo ("<td align=center>" . "\r\n");
							echo ("<A HREF=\"javascript:void(0)\" onClick=\"openit(0,'http://www.housevampyr.com/training/library/books/booksdyn.html?BookName=");
							echo (rawurlencode ( $BookName ));
							echo ("&Desc=");
							echo (rawurlencode ( $Desc ));
							echo ("');");
							echo ("\">Description...</a>" . "\r\n");
							echo ("</td>" . "\r\n");
						} else {
							
							echo ("<td align=center>" . $result . "</td>");
						}
					}
				}
			}
			
			echo ("</tr>");
		}
		echo ("</table></div>");
	}
	
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
	
	// -------------------------------------------------------
	/* Displays Error */
	function DisplayError($errormessage, $location) {
		echo "<tr><td align=" . $location . ">";
		echo $errormessage;
		echo "</td></tr>";
	}
	
	// --------------------------------------------------------
	/* Displays Button */
	function DisplayButton($text, $url) {
		echo '<div class="button">';
		echo '	<a class="w3c" href="' . $main . '?title=Books Database&body=' . $url . '">' . $text . '</a>';
		echo '</div>';
	}
	
	// --------------------------------------------------------
	/* Displays Button */
	function DisplayButtonLibrary($text, $url) {
		echo '<div class="button">';
		echo '	<a class="w3c" href="' . $main . '?title=House VamPyr Book Library&body=' . $url . '">' . $text . '</a>';
		echo '</div>';
	}
	
	// --------------------------------------------------------
	/* Adds header to page */
	public function headerInfo($colspan, $Title, $location) {
		echo ("<table class=\"redborder\" align=\"center\" bgcolor=\"#000000\" border=\"1\" cellspacing=\"1\" cellpadding=\"5\">");
		echo ("<tr><td colspan='" . $colspan . "' align=" . $location . "><img src= '../points/housebanner.gif'></td></tr>");
		echo ("<tr><td colspan='" . $colspan . "' align=" . $location . "><font size='6'>" . $Title . "</font></td></tr>");
	}
	
	// --------------------------------------------------------
	/* Adds header to page */
	public function headerInfoLibrary($colspan, $Title, $location) {
		echo ("<table class=\"redborder\" align=\"center\" bgcolor=\"#000000\" border=\"1\" cellspacing=\"1\" cellpadding=\"5\">");
		echo ("<tr><td colspan='" . $colspan . "' align=" . $location . "><font size='6'>" . $Title . "</font></td></tr>");
	}
	
	// --------------------------------------------------------
	/* Adds header to page */
	public function headerInfoBios($colspan, $Title, $location) {
		echo ("<table class='red' style='background-color: #000000'>");
		echo ("<tr><td colspan='" . $colspan . "' align=" . $location . "><font size='6'>" . $Title . "</font></td></tr>");
	}
	
	// -------------------------------------------------------
	/* Adds footer to page */
	public function footerinfo($location, $home) {
		echo ("<p align=" . $location . "><br><a href='" . $home . "?Data=Main'>Return to Main</a></p>");
	}
	
	// -------------------------------------------------------
	/* Adds footer Mod stuff */
	public function foot($file) {
		$filetime = filemtime ( $file );
		// displays in Seconds since the Unix Epoch
		$dateupdate = date ( "M j, Y", $filetime );
		echo '<div align="center">';
		echo ("<font size =1 face=arial>This page Belongs to House Vampyr TM </font><Font face=arial size=-1>&#169;</font><br>");
		echo ("<font size =1 face=arial>This page was modified on " . $dateupdate . "</font> <BR>");
		echo '</div>';
	}
}

?>
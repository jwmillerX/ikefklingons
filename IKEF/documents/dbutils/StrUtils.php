<?php

/*
 * StrUtils.php - A class of simple str utilities.
 *
 */
class StrUtils {
	
	// define variables and set to empty values
	// private $nameErr = $emailErr = $genderErr = $websiteErr = "";
	// private $name = $email = $gender = $comment = $website = "";
	
	// Create a PDO object and connect to the database4
	public function __construct() {
	}
	
	// // Checks name for valid chars
	// public function checkName($name) {
	// if (empty ( $name )) {
	// $nameErr = "Name is required";
	// } else {
	// $name = test_input ( $name );
	// // check if name only contains letters and whitespace
	// if (! preg_match ( "/^[a-zA-Z ]*$/", $name )) {
	// $nameErr = "Only letters and white space allowed";
	// }
	// }
	// }
	
	// Checks Email
	public function checkEmailAddress($email) {
		return filter_var ( $email, FILTER_VALIDATE_EMAIL );
	}
	
	// // Checks Url
	// public function checkUrlAddress($website) {
	// if (empty ( $website )) {
	// $website = "";
	// } else {
	// $website = test_input ( $website );
	// // check if URL address syntax is valid
	// if (! preg_match ( "/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $website )) {
	// $websiteErr = "Invalid URL";
	// }
	// }
	// }
	
	// // test_input
	// public function test_input($data) {
	// $data = trim ( $data );
	// $data = stripslashes ( $data );
	// $data = htmlspecialchars ( $data );
	// return $data;
	// }
}
?>
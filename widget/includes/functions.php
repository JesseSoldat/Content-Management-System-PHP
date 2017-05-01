<?php

function mysql_prep($value) {
	$magic_quotes_active = get_magic_quotes_gpc();
	$new_enough_php = function_exists("mysql_real_escape_string");

	if($new_enough_php) {
		if($magic_quotes_active) {
			$value = stripslashes($value);
		} else {
			if(!$magic_quotes_active){
				$value = addslashes($value);
			} 
		}
	}
	return $value;
}

function redirect_to($location = NULL) {
	if($location != NULL) {
		header("Location: {$location}");
		exit;
	}
}

function confirm_query($result_set) {
	if(!$result_set) {
		die("Database query failed: " . mysql_error());
	}
}
 


?>
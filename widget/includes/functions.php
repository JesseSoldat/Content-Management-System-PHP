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

function get_subject_by_id($subject_id) {
	global $connection;
	$query = "SELECT * ";
	$query .= "FROM subjects ";
	$query .= "WHERE id = " . $subject_id;
	$query .= " LIMIT 1";

	$result_set = mysql_query($query, $connection);
	confirm_query($result_set);

	if($subject = mysql_fetch_array($result_set)) {
		return $subject;
	} else {
		return NULL;
	}
}

function find_selected_page() {
	global $sel_subject;
	global $sel_page;
	if(isset($_GET['subj'])) {
		$sel_subject = get_subject_by_id($_GET['subj']);
	} else {
		$sel_subject = NULL;
	}
}

function get_all_subjects($public = true) {
	global $connection;
	$query = "SELECT * FROM subjects ";
	if($public) {
		$query .= "WHERE visible = 1 ";
	}
	$query .= "ORDER BY position ASC";
	$subject_set = mysql_query($query, $connection);
	confirm_query($subject_set);
	return $subject_set;
}

function navigation($sel_subject, $sel_page, $public = false) {
	$output = '<ul class="subjects">';

		$subject_set = get_all_subjects($public);

		while($subject = mysql_fetch_array($subject_set)) {
			$output .= "<li";
			if($subject["id"] == $sel_subject['id']) {
				$output .= " class\"selected\"";
			}
			$output .= "><a href=\"edit_subject.php?subj=" .
				urldecode($subject["id"]) . "\">{$subject["menu_name"]}</a></li>";




		}
		$output .= "</ul>";
		return $output;
}
 


?>
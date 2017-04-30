<?php 
	function check_required_fields($required_array) {
		$field_errors = array();
		foreach($required_array as $fieldname) {
			if(!isset($_POST[$fieldname]) || 
				(empty($_POST[$fieldname]) 
					&& !is_numeric($_POST[$fieldname]))) {
				$field_errors[] = $fieldname;
			}
			// echo $fieldname . "<br/>";
		}
		print_r($field_errors);
		return $field_errors;
	}



?>
<?php
require_once( "includes/session.php" );
require_once( "includes/connection.php" );
require_once( "includes/functions.php" );
confirm_logged_in();

//Validation
$errors = array();
$required_fields = array('menu_name', 'position', 'visible', 'content');

foreach($required_fields as $fieldname) {
	if(!isset($_POST[$fieldname]) || empty($_POST[$fieldname])) {
		$errors[] = $fieldname;
	}
}

$fields_with_lengths = array( 'menu_name' => 30 );
foreach ( $fields_with_lengths as $fieldname => $maxlength ) {
	if ( strlen( trim( mysql_prep( $_POST[$fieldname] ) ) ) > $maxlength ) {
		$errors[] = $fieldname;
	}
}

if ( !empty($errors ) ) {
	redirect_to( "new_page.php" );
}

$menu_name = mysql_prep( $_POST['menu_name'] );
$subject_id = mysql_prep( $_GET['subj']);
$position  = mysql_prep( $_POST['position'] );
$visible   = mysql_prep( $_POST['visible'] );
$content = mysql_prep( $_POST['content']);

$query = "INSERT INTO pages (subject_id, menu_name, position, visible, content) VALUES ( {$subject_id}, '{$menu_name}', {$position}, {$visible}, '{$content}' )";

if(mysql_query($query, $connection)) {
	redirect_to("content.php");
} else {
	echo "<p>Page creation failed.</p>";
	echo "<p>" . mysql_error() . "</p>";
}
mysql_close( $connection );

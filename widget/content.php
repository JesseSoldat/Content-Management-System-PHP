<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php find_selected_page(); ?>
<?php include("includes/header.php"); ?>
<table id="structure">
	<td id="navigation">
		<?php echo navigation($sel_subject, $sel_page); ?>
		<br/>
		<a href="new_subject.php">+ Add a new subject</a>
	</td>
	<td id="page">
		
	</td>
</table>
<?php require("includes/footer.php"); ?>

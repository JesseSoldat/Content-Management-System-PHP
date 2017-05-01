<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php

if(intval($_GET['subj']) == 0) {
	redirect_to("content.php");
}

if(isset($_POST['submit'])) {
	$errors = array();
	$required_fields = array('menu_name', 'position', 'visible');
}

?>
<?php find_selected_page(); ?>
<?php include("includes/header.php"); ?>
<table id="structure">
	<tr>
		<td id="navigation">
			<?php echo navigation($sel_subject, $sel_page); ?>
		</td>
		<td id="page">
			<h2>Edit Subject: </h2>


			<form>
				
			</form>
			<br />
			<a href="content.php">Cancel</a>
			<hr />
			<h3>Pages in this subject:</h3>
			<ul>
				
			</ul>
			<a href="new_page.php?subj=
				<?php echo $sel_subject['id']; ?>">+ Add a new page
			</a>
		</td>
	</tr>
</table>
<?php require("includes/footer.php"); ?>

<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/functions.php"); ?>

<?php include("includes/header.php"); ?>
<table id="structure">
	<tr>
		<td id="navigation"></td>
		<td id="page">
			<h2>Add Subject</h2>
			<form action="create_subject.php" method="post">
				<p>
					Subject name:
					<input type="text" name="menu_name" value=""
					id="menu_name">
				</p>
				<p>
					Position:
					<select name="position">
						<option value="1">1</option>
					</select>
				</p>
				<p>
					Visible:
					<input type="radio" name="visible" value="0" /> No
					&nbsp;
					<input type="radio" name="visible" value="1" /> Yes
				</p>
				<input type="submit" name="submit" value="Add Subject" />
			</form>
			<br />
			<a href="content.php">Cancel</a>
		</td>
	</tr>
</table>
<?php require("includes/footer.php"); ?>

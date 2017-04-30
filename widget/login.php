<?php
	require_once("includes/session.php");
	require_once("includes/connection.php");
	require_once("includes/functions.php");

	if(logged_in()){
		echo "Logged In";
	}

	include_once( "includes/form_functions.php" );


	if(isset($_POST['submit'])) {
		$errors = array();

		$required_fields = array('username', 'password');

		$errors = array_merge($errors,
			check_required_fields($required_fields, $_POST));
	}
	$username = '';
	$password = '';
?>

<?php include("includes/header.php"); ?>
<table id="structure">
	<tr>
		<td id="navgation">
			<br/>
		</td>
		<td id="page">
			<h2>Create New User</h2>
				<form action="login.php" method="post">
					<table>
						<tr>
							<td>Username:</td>
							<td>
								<input type="text" name="username" 
									maxlength="30" value="<?php echo htmlentities($username); ?>" />
								</td>
						</tr>
						<tr>
							<td>Password:</td>
							<td>
								<input type="password" name="password" 
								maxlength="30" value="<?php echo htmlentities($password); ?>" />
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<input type="submit" name="submit"
									value="Create User" />
							</td>
						</tr>
					</table>
				</form>
		</td>
	</tr>
	
</table>
<?php require("includes/footer.php"); ?>

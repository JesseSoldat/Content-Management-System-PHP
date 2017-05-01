<?php
	require_once("includes/session.php");
	require_once("includes/connection.php");
	require_once("includes/functions.php");

	if(logged_in()){
		redirect_to("staff.php"); 
	}

	include_once( "includes/form_functions.php" );

	$username = '';
	$password = '';

	if(isset($_POST['submit'])) {
		$errors = array();

		$required_fields = array('username', 'password');

		$errors = array_merge($errors,
			check_required_fields($required_fields, $_POST));

		$fields_with_lengths = array('username' => 30,
			'password' => 30);

		$errors = array_merge($errors, check_max_field_lengths(
			$fields_with_lengths, $_POST ));

		print_r($errors);
		// var_dump($errors);
		$username = trim(mysql_prep($_POST['username']));
		$password = trim(mysql_prep($_POST['password']));

		if(empty($errors)) {
			$query = "SELECT id, username FROM users ";
			$query .= "WHERE username = '{$username}' ";
			


		} else {
			$message = "Username/password combination incorrect.<br/>
			Please make sure you typed them correctly.";
		}
	}

?>

<?php include("includes/header.php"); ?>
<table id="structure">
	<tr>
		<td id="navgation">
			<br/>
		</td>
		<td id="page">
			<h2>Create New User</h2>
			<?php 
				if(!empty($message)) {
					echo "<p class=\"message\">" . $message . "</p>";
				}
			 ?>
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

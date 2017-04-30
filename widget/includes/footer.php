		</div>
		<div id="footer">
			Widget Corp
		</div>
	</body>
</html>
<?php
	if(isset($connection)) {
		// 5 close the connection
		mysql_close($connection);
	}
?>
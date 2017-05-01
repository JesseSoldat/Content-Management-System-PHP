<?php 
	if(!isset($new_page)) {
		$new_page = false;
	}
?>

<p>
	Page name:
	<input type="text" name="menu_name" value="<?php echo $sel_page['menu_name']; ?>" id="menu_name" />
</p>
<p>
	Position:
	<select name="position">
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
	</select>
</p>
<p>
	Visible:
	<input type="radio" name="visible" value="0"
		<?php if($sel_page['visible'] == 0) {echo " checked"; } ?> />
			No
	<input type="radio" name="visible" value="1"
		<?php if($sel_page['visible'] == 1) {echo " checked"; } ?> />
			Yes
</p>
<p>
	Content: <br/>
	<textarea name="content" rows="20" cols="80">
		<?php echo $sel_page['content']; ?>
	</textarea>
</p>
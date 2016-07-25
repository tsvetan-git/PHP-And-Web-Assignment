<?php
	$pageTitle = 'task-05';
	include 'header.php';
	
	var_dump($_REQUEST, $_POST, $_GET);
?>
<form method="POST" >
	<label>Enter a string</label>
	<input type="text" name="string">
	<label>Enter a number</label>
	<input type="number" name="number">
	<input type="submit" name="submitBtn">
</form>
<?php
	include 'footer.php';
?>
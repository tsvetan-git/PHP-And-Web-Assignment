<?php
	$pageTitle = 'task-08';
	include 'header.php';
	$counter = isset($_POST['counter']) ? $_POST['counter'] : 0;	
	if ($_POST) {
		$counter++;
	}
?>
<form action="index.php" method="post">
    <label for="firstname">Name:</label>
    	<input type="text" id="name" name="name">
    	<input type="hidden" name="counter" value="<?= $counter ?>">       
    <label for="surname">Age:</label>
    	<input type="number" id="age" name="age">
 	<button type="submit">Submit</button>
<?= ($_POST && $counter) ? "<p>Submitted $counter times.</p>" : '' ?>
</form>
<?php
	include 'footer.php';
?>
<?php
	$pageTitle = 'task-04';
	include 'header.php';
	$output = '';	
	if ($_SERVER['REQUEST_METHOD'] == 'POST'){
		if(isset($_POST['numbers'])){
			$input = $_POST['numbers'];
			$input = trim(sanitize($input)); 
			$numArr= explode(',', $input);
			sort($numArr);
			$output = max($numArr);
		}
	}
	function sanitize($string) {
		$string = str_replace(' ', '', $string);
		return preg_replace('/[^0-9\-\,\.]/', '', $string);
	}	
?>
<form method="POST" >
	<label>Numbers: </label>
	<input type="text" name="numbers">
	<input type="submit" name="submit">
</form>
<div id="result"> RESULT: <?= $output;?></div>
<?php
	include 'footer.php';
?>
<?php
	$pageTitle = 'task-01';
	include 'header.php';
	$operations = ['+', '-', '*', '/'];
	$output='';
	
	if ($_SERVER['REQUEST_METHOD'] == 'POST'){
		if(isset($_POST['numberA']) && isset($_POST['numberB'])){
			if(is_numeric($_POST['numberA']) && is_numeric($_POST['numberB'])){
			$c = $_POST['operation']; 
			$a = $_POST['numberA']; 
			$b = $_POST['numberB'];	
			$output = result($a, $b, $c);
			}
		}
		
	}
	function result ($a,$b,$c){
		if ($c == '+'){
			return $a+$b;
		}
		if ($c == '-'){
			return $a-$b;
		}
		if ($c == '*'){
			return $a*$b;
		}
		if ($c == '/'){
			if($a == 0){
			return 'NaN';
			}
			return $a/$b;
		}
	}
?>
<form method="POST" >
	<label>Number A</label>
	<input type="number" name="numberA">
	<label>Number B</label>
	<input type="number" name="numberB">
	<label>Operation</label>
	<select name="operation">
		<?php 
		foreach ($operations as $value){
			echo '<option>'.$value.'</option>';
		}
		?>
	</select>
	<input type="submit" name="calculate">
</form>
<div id="result"> RESULT: <?= $output;?></div>
<?php
	include 'footer.php';
?>
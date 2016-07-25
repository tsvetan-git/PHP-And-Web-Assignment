<?php
	$pageTitle = 'task-03';
	include 'header.php';
	$output='';
	
	if ($_SERVER['REQUEST_METHOD'] == 'POST'){
		if(isset($_POST['value'])){
			if(is_numeric($_POST['value'])){
				$option = $_POST['operation'];
				$value = $_POST['value']; 
			$output = result($value, $option);
			$output = sprintf("%.2f",$output);
		}
	}
}
	function result ($value, $option){
			if($option == 'cf'){
				return $value = (($value * 9/5) + 32);
			}
			if($option == 'fc'){
				return $value = (($value - 32) / 1.8);
			}
	}
?>
<form method="POST" >
	<label>Value: </label>
	<input type="number" name="value">
	<label>Operation: </label>
	<select name = "operation">
		<option value="cf">Celsius->Fahrenheit</option>
		<option value="fc">Fahrenheit->Celsius</option>
	</select>
	<input type="submit" name="calculate">
</form>
<div id="result"> RESULT: <?= $output;?></div>
<?php
	include 'footer.php';
?>
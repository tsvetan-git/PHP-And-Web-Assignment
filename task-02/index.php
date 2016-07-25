<?php
	$pageTitle = 'task-02';
	include 'header.php';
	$error = '';
	$username = validate(getValue($_POST, 'username'));
	$password = validate(getValue($_POST, 'password'));
	$confirm = validate(getValue($_POST, 'confirm'));
	
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		if($username != null){
			if ($password != null && $password == $confirm){
				$password = crypt($password);
			}else {
				$password = null;
				$error = 'Password mismatch.';
			}
		}else{
				$password = null;
				$error = 'Username is empty.';
			}
	}
	function getValue($array,$key, $default = null){
		return isset($array[$key]) ? $array[$key] : $default;
	}
	
	function validate($input) {
		$input = trim($input);
		$input = stripslashes($input);
		$input = htmlspecialchars($input);
		return $input;
	}
?>
<form method="POST" >
	<label>username: </label>
	<input type="text" name="username">
	<label>type password: </label>	<input type="password" name="password">
</div>

	<label>retype password: </label>
	<input type="password" name="confirm">
	<input type="submit" name="check">
</form>
<div><?= $username; ?></div>
<div><?= $password; ?></div>
<div><?= $error; ?></div>

<?php
	include 'footer.php';
?>
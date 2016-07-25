<?php
	$pageTitle = 'task-07';
	
	echo $_SERVER['HTTP_USER_AGENT'];
		
		foreach(@get_browser(null, true) as $key => $value) {
			echo "$key: $value";
		}
		
		foreach($_SERVER as $key => $value){
			echo "$key: $value";
		}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title><?=$pageTitle;?></title>
</head>
<body>
</body>
</html>
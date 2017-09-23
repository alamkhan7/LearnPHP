<?php
	date_default_timezone_set('Asia/Karachi');
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/common.css" />
	<title>Hello</title>
</head>
<body>
	<h1>
	<?php 
		$currentTime = date( "j(D)/m(M)-y(Y) g:i:s a" );
		echo "Hello, world! The current time is $currentTime"; 
	?>
	</h1>
</body>
</html>
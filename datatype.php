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
		$test_var1 ; // Declares the $test_var variable without initializing it
		$test_var2 = true ;
		$test_var3 = 0 ;
		$test_var4 = "alam" ;
		$test_var5 = 15;
		$test_var6 = 8.23;

		echo gettype( $test_var1) . " <br /> ";
		echo gettype( $test_var2) . " <br /> ";
		echo gettype( $test_var3) . " <br /> ";
		echo gettype( $test_var4) . " <br /> ";
		echo gettype( $test_var5) . " <br /> ";
		echo gettype( $test_var6) . " <br /> ";

		settype( $test_var6, "string" );
		echo gettype( $test_var6) . " <br /> ";

		$x1 = false || true; // $x is true
		$x2 = false or true; // $x is false

		echo $x1 . " <br /> ";
		echo $x2 . " <br /> ";
	?>
	</h1>
</body>
</html>
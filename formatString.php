<?php 

	echo M_PI ."</br>" ;
	printf( "Pi rounded to a whole number is: %c</br>", M_PI );
	
	$a = "4" ;
	$b = "5" ;
	$c = "6" ;
	printf(" %3$s %1$s %2$s </br>" , $a,$b,$c) ;

	$myNumber = 123.45;
	printf( "Binary: %b </br>", $myNumber );
	printf( "Character: %c </br>", $myNumber );
	printf( "Decimal: %d </br>", $myNumber );
	printf( "Scientific: %e </br>", $myNumber );
	printf( "Float: %f </br>", $myNumber );
	printf( "Octal: %o </br>", $myNumber );
	printf( "String: %s </br>", $myNumber );
	printf( "Hex (lower case): %x </br>", $myNumber );
	printf( "Hex (upper case): %X </br>", $myNumber );

?>
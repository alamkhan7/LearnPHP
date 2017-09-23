<?php 
	/*Also used to check speed of server if less echo  then speedy*/
	/*returns the current timestamp as a floating - point number */
	$startTime = microtime( true );

	for ( $num = 1; microtime( true ) < $startTime + 0.0001; $num = $num * 2 ) {
		echo "Current number: $num <br /> ";
	}
	
	echo "Out of time!";

	/*
		for loop sets $num to 1, then keeps multiplying $num by 2, displaying the result
		each time, until 100 microseconds have elapsed. Finally, the script displays an  Out of time! message.
	*/

?>
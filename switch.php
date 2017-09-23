<?php
	
	$userAction = 2 ;
	switch ( $userAction ) 
	{
		case 1:
			print "One </br>";
			break;
		case 2:
			print "Two </br>";
			break;
		case 3:
			print "Three </br>";
			break;
		case 4:
			print "Four </br>";
			break;
		default:
			print "Please choose an option";
	}

	echo "</br></br>----------------------------</br></br>" ;

	$userAction = 210 ;
	switch ( 10 ) 
	{
		case ($userAction > 1 && $userAction < 5):
			print "$userAction > 1 && $userAction < 5 </br>";
			break;
		case ($userAction > 5 && $userAction < 10):
			print "$userAction > 5 && $userAction < 10 </br>";
			break;
		case ($userAction > 10 && $userAction < 20):
			print "$userAction > 10 && $userAction < 20 </br>";
			break;
		case ($userAction > 15 && $userAction < 25):
			print "$userAction > 15 && $userAction < 25 </br>";
			break;
		default:
			print "Above 25";
	}

?>
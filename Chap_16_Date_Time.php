<?php 

echo "<pre>";
print_r( getdate(mktime())) ;
echo "</pre>";

// echo "<pre>";
// print_r( getdate(gmmktime(14, 32, 12, 1, 6, 1972 ))) ;
// echo "</pre>";

$alam = strtotime( "June 1, 1992" );
$d = getdate( $alam );
echo "Alam was born on " . $d["weekday"] . " " . $d["month"] . ", " . $d["year"] . " <br /> ";


$t = getDate();
echo "The current time is " . $t["hours"] . ":" . $t["minutes"] . " <br /> ";

/*-------------*/
echo "<br>";

$d = strtotime( "February 18, 2000 7:49am" );
// Displays “The year 2000 is a leap year.”
echo "The year " . idate( "Y", $d );
echo " is " . ( idate( "L", $d ) ? "" : "not" ) . " a leap year. <br /> ";
// Displays “The month in question has 29 days.”
echo " The month in question has " . idate( "t", $d ) . " days. <br /> ";



 ?>
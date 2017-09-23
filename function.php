<?php 

$squareRoot = "sqrt";
echo "The square root of 9 is: " . $squareRoot( 9 ) . ". <br> ";
echo "All done! <br> " ;

echo "<br> <br>" ;

$strigFunctions = array( "sin", "cos", "tan" );
$degrees = 30;
foreach ( $strigFunctions as $strigFunction ) {
	echo "$strigFunction($degrees) = " . $strigFunction( deg2rad( $degrees ) )
. " <br> ";
}

echo "<pre>" ;
print_r($GLOBALS);
echo "</pre>" ;

echo "<br> <br>";

function nextNumber() {
static $counter;
return ++$counter;
}
echo "I've counted to: " . nextNumber() . " <br> ";
echo "I've counted to: " . nextNumber() . " <br> ";
echo "I've counted to: " . nextNumber() . " <br> ";

echo "<br> <br>";

$mode = "+";
$processNumbers = create_function( '$a, $b', "return \$a $mode \$b;" );
echo $processNumbers( 2, 3 ); // Displays 5

echo "<br> <br>";

$myVar = 123;
$myRef = &$myVar;
$myRef++;
echo $myRef . " <br> "; // Displays 124
echo $myVar . " <br> "; // Displays 124

echo "<br> <br>";

$myNumber = 5;
function &getMyNumber() {
global $myNumber;
return $myNumber;
}
$numberRef = & getMyNumber();
$numberRef++;
echo "\$myNumber = $myNumber <br> "; // Displays “6”
echo "\$numberRef = $numberRef <br> "; // Displays “6”
?>
<?php

$favoriteAnimal = "cat";
echo "My favorite animals are $favoriteAnimal";

echo "</br>" ;

$myArray['age'] = 34;
echo "My age is {$myArray["age"]} ";

echo "</br>" ;

/* heredoc example */

$religion = "Hebrew";
$myString = <<<ALAM
I am a $religion,' he cries - and then - 'I fear the Lord the God of
Heaven who hath made the sea and the dry land!
ALAM;
echo " <pre> $myString </pre> ";


echo "</br>" ;

/* newdoc example difference is only in quation of ALAM*/

$religion = "Hebrew";
$myString = <<<'ALAM'
I am a $religion,' he cries - and then - 'I fear the Lord the God of
Heaven who hath made the sea and the dry land!
ALAM;
echo " <pre> $myString </pre> ";

$myString = "Hello, world!";
echo $myString[0] . " <br /> "; // Displays ‘H’
echo $myString[7] . " <br /> "; // Displays ‘w’
$myString[12] = '?';
echo $myString . " <br /> "; // Displays ‘Hello, world?’

echo "</br>" ;

$myString = "Hello, world!";
echo strpos($myString, "ld") . " <br /> "; // Displays ‘4’
echo strrpos($myString, "o") . " <br /> "; // Displays ‘8’

echo "</br>" ;

$myString = "I say, nay, nay, and thrice nay!";
echo substr_count($myString, "nay", 9) . " <br /> "; // Displays ‘2’
echo substr_count($myString, "nay", 0, 14) . " <br /> "; // Displays ‘1’

<?php 

$handler = fopen("milton.txt", 'rb');

print_r(feof($handler));
while ($line = fgets($handler)){
	echo $line ;
}

print_r(feof($handler));


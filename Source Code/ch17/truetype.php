<?php
$textImage = imagecreate( 800, 600 );
$white = imagecolorallocate( $textImage, 255, 255, 255 );
$black = imagecolorallocate( $textImage, 0, 0, 0 );
imagefttext( $textImage, 30, 15, 200, 300, $black, "./Blazed.ttf", "Blazed, 16 pixels" );
header( "Content-type: image/png" );
imagepng( $textImage );
imagedestroy( $textImage );
?>


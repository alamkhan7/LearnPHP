<?php
$textImage = imagecreate( 400, 400 );
$white = imagecolorallocate( $textImage, 255, 255, 255 );
$black = imagecolorallocate( $textImage, 0, 0, 0 );
$yOffset = 0;

for ( $i = 1; $i <= 10; $i++ ) {
   imagestring( $textImage, $i, 5, $yOffset, "This is system font $i", $black );
   $yOffset += imagefontheight( $i );
}

header( "Content-type: image/png" );
imagepng( $textImage );
imagedestroy( $textImage );
?>


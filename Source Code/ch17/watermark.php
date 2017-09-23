<?php
$myImage = imagecreatefromjpeg( "lucky.jpg" );
$myCopyright = imagecreatefrompng( "copyright.png" );

$destWidth = imagesx( $myImage );
$destHeight = imagesy( $myImage );
$srcWidth = imagesx( $myCopyright );
$srcHeight = imagesy( $myCopyright );

$destX = ($destWidth - $srcWidth) / 2;
$destY = ($destHeight - $srcHeight) / 2;

$white = imagecolorexact( $myCopyright, 255, 255, 255 );
imagecolortransparent( $myCopyright, $white );


imagecopymerge( $myImage, $myCopyright, $destX+5, $destY+5, 0, 0, $srcWidth, $srcHeight,10);

header( "Content-type: image/jpeg" );
imagejpeg( $myImage );
imagedestroy( $myImage );
imagedestroy( $myCopyright );
?>


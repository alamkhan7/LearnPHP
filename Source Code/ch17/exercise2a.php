<?php
$iWidth = 500;
$iHeight = 50;

$myImage = imagecreate( $iWidth, $iHeight );
$white = imagecolorallocate( $myImage, 255, 255, 255 );
$black = imagecolorallocate( $myImage, 0, 0, 0 );

$red = imagecolorallocate( $myImage, 255, 0, 0 );
$green = imagecolorallocate( $myImage, 0, 255, 0 );

$diskTotal = disk_total_space( "/" );
$diskFree = disk_free_space( "/" );

imagerectangle( $myImage, 0, 0, $iWidth - 1, $iHeight - 1, $black );

/*
The $threshold variable will be used to mark the position along the x - axis where you move from the
used disk space to the free disk space in your diagram. Because used disk space is usually represented
on the left side of such diagrams, you first need to calculate that space — it is the total disk space minus
the free disk space. Divide that by the total amount of disk space to get a number between 0 and 1,
which you then multiply by the width of the image. Subtract 2 from the width of the image because
you already used 2 pixels drawing the image border; then add 1 to the overall threshold because pixels
start at 0

For example, if your disk was 400 bytes in size and you had used 200 bytes, 200 divided by 400 equals
0.5. If your image width were 500 pixels, you ’ d multiply the 0.5 and 498 (the width minus 2 for the
border) together to get 249. Then you ’ d add 1 to get 250: the x pixel position that is halfway across the
image
*/

$threshold = intval( ( ( $diskTotal - $diskFree ) / $diskTotal ) * ( $iWidth-2 ) ) + 1;


imagefilledrectangle( $myImage, 1, 1, $threshold, ( $iHeight-2 ), $red );

imagefilledrectangle( $myImage, ( $threshold + 1 ), 1, ( $iWidth - 2 ),
  $iHeight-2, $green );

header( "Content-type: image/png" );
imagepng( $myImage );
imagedestroy( $myImage );
?>


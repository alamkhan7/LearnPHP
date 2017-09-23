<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <title>Listing the contents of a directory</title>
    <link rel="stylesheet" type="text/css" href="common.css" />
  </head>
  <body>
    <h1>Listing the contents of a directory</h1>

<?php

$dirPath = "../../css";

/*Calling the function*/
traverseDir( $dirPath );

function traverseDir( $dir ) {
  echo "<h2>Listing $dir ...</h2>";
  if ( !( $handle = opendir( $dir ) ) ) die( "Cannot open $dir." );

  $files = array();

  while ( $file = readdir( $handle ) ) {
    if ( $file != "." && $file != ".." ) {

      /*If a particular filename is a directory, a slash (/) is added to the end of the filename
        $dir . "/" to create full path to that file
      */
      if ( is_dir( $dir . "/" . $file ) )
          $file .= "/";

      $files[] = $file;
    }
  }

  sort( $files );
  echo "<ul>";
  foreach ( $files as $file ) echo "<li>$file</li>";
  echo "</ul>";

  /*
  looking for any directories (where the filename ends in a slash). If it finds a directory,
  the function calls itself with the directory path (minus the trailing slash)
  */
  foreach ( $files as $file ) {
    if ( substr( $file, -1 )  == "/" )
        traverseDir( "$dir/" . substr( $file, 0, -1 ) ); // -1 to remove /
  }

  closedir( $handle );
}



?>
  </body>
</html>


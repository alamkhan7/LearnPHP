<?php

/*Testing for the End of a File*/
// hello_world.txt contains the characters “Hello, world!”
$handle = fopen( "hello_world.txt", "r" );
$hello = fread( $handle, 13 );
echo $hello . " <br/> "; // Displays “Hello, world!”
echo feof( $handle ) . " <br /> "; // Displays “” (false)
$five_more_chars = fread( $handle, 5 );
echo $five_more_chars . " <br /> "; // Displays “” (or possibly a newline)
echo feof( $handle ) . " <br /> "; // Displays “1” (true)
fclose( $handle );
 /************************************/
 echo "<br><br>" ;

/*feof() is useful with fread() or fgetc() in a while loop when you don ’ t know how long the file is */
// hello_world.txt contains the characters “Hello, world!”
$handle = fopen( "hello_world.txt", "r" );
$text = "";
while ( !feof( $handle ) ) {
    $text .= fread( $handle, 3 ); // Read 3 chars at a time
}
echo $text . " <br /> "; // Displays “Hello, world!”
fclose( $handle );

/************************************/
echo "<br><br>" ;
 /*Reading one line at a time*/

$handle = fopen( "milton.txt", "r" );
$lineNumber = 1;
while ( $line = fgets( $handle ) ) {
	echo $lineNumber++ . ": $line <br /> ";
}
fclose( $handle );

/*************************************/
echo "<br><br>" ;
/*Reading CSV file*/

/*
In CSV files, each data record sits on its own line, and the fields within each record are separated by commas. 
String values are often enclosed within double quotes:
*/
$handle = fopen( "people.csv", "r" );
while ( $record = fgetcsv( $handle, 1000 ) ) {
	echo "Name: {$record[0]} {$record[1]}, Age: {$record[2]} <br /> ";
}
fclose( $handle );

/*----------------------------------------------------*/
echo "<br><br>" ;
/*Change file permission*/
echo chmod("hello_world.txt", 0111);

/*-------------------------------------*/
echo "<br><br>" ;
/*check file permission*/

if ( is_readable( "hello_world.txt" )) {
	echo "I can read myfile.txt";
}
if ( is_writable( "hello_world.txt" )) {
	echo "I can write to myfile.txt";
}
if ( is_executable( "hello_world.txt" )) {
	echo "I can execute myfile.txt";
}

echo "<br><br>" ;
echo substr( sprintf( "%o", fileperms( "hello_world.txt") ), -4 );
/* substr() is used to return just the last four digits, because the other octal digits in the
returned value aren ’ t relevant.)*/


/*---------------------------------*/
/*Copy renaming and deleting files*/
echo "<br><br>" ;

copy( "./hello_world.txt", "./hello_world_copy.txt" );

if (unlink("./hello_world_copy.txt"))
	echo "'./hello_world_copy.txt' succefully deleted.";

/*---------------------------------------*/
/*Working with directoires*/
echo "<br><br>" ;
echo getcwd();   //C:\xampp\htdocs\LearnPHP

if (mkdir("./Alam" , 0444)){
	echo "<br>";
	echo "Alam directory succefully created";
	echo "<br>";
	echo substr( sprintf( "%o", fileperms( "./Alam") ), -4 );
	chmod("./Alam", 0744);
	echo "<br>";
	echo substr( sprintf( "%o", fileperms( "./Alam") ), -4 );
}
else{
	echo "<br>";
	echo "Failed to create Alam directory";
}

if (rmdir("./Alam")){
	echo "<br>";
	echo "Alam directory succefully deleted";
	
}
else{
	echo "<br>";
	echo "Failed to create Alam directory";
}

echo "<br>";

echo "Using dirname()" . dirname(getcwd());
echo "<br>";

echo $path = "C:\\xampp\htdocs\LearnPHP\Chap_11_Working_With_Files.php";
echo "<br>";
echo $directoryPath = dirname( $path );
echo "<br>";
echo $filename = basename( $path );


/*------------------------------------------*/
/*Working with Directory Objects*/
echo "<br><br>" ;
if (!$dir = dir("../"))
	die("Open to call dir($path) function");
echo $dir->handle ."<br>" ;
echo $dir->path . "<br>" ;

/*--------------------------------------------*/
echo "<br><br>" ;
echo "To know whether a particular file is a regular file or a directory<br>";

$filename = $path ;
if ( is_dir( $filename ) ) {
	echo "$filename is a directory.";
} elseif ( is_file( $filename ) ) {
	echo "$filename is a file.";
} else {
	echo "$filename is neither a directory nor a file." ;
}


?>
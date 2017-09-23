<?php 

$dsn = "mysql:host=localhost;dbname=adnan" ;
$username = "root" ;
$password = ")(*LKJ";

try {
	$conn = new PDO( $dsn, $username, $password );
	$conn ->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
	echo "Connection establish successfully<br>";
} 
catch ( PDOException $e ) {
	echo "Connection failed: " . $e -> getMessage();
}

$sql = "SELECT * FROM t1";
$rows = $conn->query( $sql );

foreach ( $rows as $row ) {
	echo "C1 = " . $row["C1"] . " <br /> ";
	echo "c0 = " . $row["c0"] . " <br /> ";
}

$conn = null;

?>
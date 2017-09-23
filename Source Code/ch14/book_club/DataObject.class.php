<?php

require_once "config.php";

/*
DataObject is an abstract class from which you can derive classes to handle database access and data retrieval. Because it ’ s an abstract class, you can ’ t instantiate (create objects from) it directly.
In OOP parlance, these types of classes are said to follow the active record design pattern, which means that the object contains the data for the record to store in or retrieve from the database, as well as the methods to carry out the actual storage and retrieval.
*/


abstract class DataObject {

  protected $data = array();

  public function __construct( $data ) {
    // recieve a one complete row
    foreach ( $data as $key => $value ) {
      /*Key of $data variable is define in member class*/
      if ( array_key_exists( $key, $this->data ) ) $this->data[$key] = $value;
    }
  }

  public function getValue( $field ) {
    if ( array_key_exists( $field, $this->data ) ) {
      return $this->data[$field];
    } else {
      die( "Field not found" );
    }
  }

  public function getValueEncoded( $field ) {
    return htmlspecialchars( $this->getValue( $field ) );
  }

  protected function connect() {
    try {
      $conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
      $conn->setAttribute( PDO::ATTR_PERSISTENT, true );
      $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
    } catch ( PDOException $e ) {
      die( "Connection failed: " . $e->getMessage() );
    }

    return $conn;
  }

  protected function disconnect( $conn ) {
    $conn = "";
  }
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <title>Creating a Wrapper Class with __call()</title>
    <link rel="stylesheet" type="text/css" href="common.css" />
  </head>
  <body>
    <h1>Creating a Wrapper Class with __call()</h1>

<?php

class CleverString {

  private $_theString = "";
  private static $_allowedFunctions = array( "strlen", "strtoupper", "strpos" );

  public function setString( $stringVal ) {
    $this->_theString = $stringVal;
  }

  public function getString() {
    return $this->_theString;
  }

  public function __call( $methodName, $arguments ) {
    echo "__Call: " . $methodName . "<br>";
    print_r($arguments);
    echo "<br><br>" ;

    if ( in_array( $methodName, self::$_allowedFunctions ) ) {
      //  inserts new elements to an array. The new array values will be inserted in the beginning of the array($argument).
      array_unshift( $arguments, $this->_theString );
      // Call the function with the argument
      return call_user_func_array( $methodName, $arguments );
    } else {
      die ( "<p>Method 'CleverString::$methodName' doesn't exist</p>" );
    }
  }
}

$myString = new CleverString;
$myString->setString( "Hello!" );
echo "<p>The string is: " . $myString->getString() . "</p>";
echo "<p>The length of the string is: " . $myString->strlen() . "</p>";
echo "<p>The string in uppercase letters is: " . $myString->strtoupper() . "</p>";

// strpos( $this - >_theString, “e” )
echo "<p>The letter 'e' occurs at position: " . $myString->strpos( "e" ) . "</p>";
$myString->madeUpMethod();

?>

  </body>
</html>

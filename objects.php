<?php

// class Car {
// public $color;
// public $manufacturer;
// static public $numberSold = 123;
// }

// Car::$numberSold++;
// echo Car::$numberSold; // Displays “124”

echo "<br> <br>";

class MyClass
{
    public $greeting = "Hello, World!";
    public function hello()
    {
        echo $this->greeting;
    }
}

echo "<br> <br>";



class MyClass1
{
    const MYCONST = 123;
    public static $staticVar = 456;

    public function myMethod()
    {
        echo "MYCONST = " . MyClass1::MYCONST . ", ";
        echo "\$staticVar = " . self::$staticVar . " <br> ";
    }
}
$obj = new MyClass1;
$obj -> myMethod(); // Displays MYCONST = 123 $staticVar = 456

echo "<br> <br>";

class Car
{
    public function __get($propertyName)
    {
        echo "The value of '$propertyName' was requested <br> ";
        return "blue";
    }
}

$car = new Car;
$x = $car-> color; // Displays “The value of ‘color’ was requested”
echo "The car's color is $x <br> "; // Displays “The car’s color is blue”

echo "<br> <br>";

class MyClass2
{

    public function __isset($propertyName)
    {
        // All properties beginning with “test” are “set”
        return ( substr($propertyName, 0, 4) == "test") ? true : false;
    }
}

$testObject = new MyClass2;
echo isset($testObject->banana) . " <br> "; // Displays “” (false)
echo isset($testObject->testBanana) . "<br> "; // Displays “1” (true)

echo "<br> <br>";

class MyClass3
{
    public static function __callStatic($methodName, $arguments)
    {
        echo "Static method '$methodName' called with the arguments: <br> ";
        foreach ($arguments as $arg) {
            echo "$arg <br> ";
        }
    }
}

MyClass3::randomMethod("apple", "peach", "strawberry");

echo "<br> <br>";

final class HandsOffThisClass
{
    public $someProperty = 123;
    public function someMethod()
    {
        echo "A method";
    }
}
// Generates an error:
// “Class ChildClass may not inherit from final class (HandsOffThisClass)”
// class ChildClass extends HandsOffThisClass {
// }


echo "<br> <br>";

class MyClass4
{
    public $name = "Khan<br>" ;

    function __construct()
    {
        echo "Whoa! I've come into being. <br> ";
    }

    public function __destruct()
    {
        echo "Hey! i am distructor lol..<br>";
    }
}




$obj = new MyClass4; // Displays “Whoa! I’ve come into being.”
echo $obj->name;
unset($obj);

echo "<br> <br>";

function __autoload($className)
{
    $className = str_replace("..", "", $className);
    require_once("$className.php");
}


$obj = new person; // Displays “Whoa! I’ve come into being.”
echo $obj->name;
unset($obj);

echo "<br> <br>";

class Snail
{
    public $age;
}

$harry = new snail();
$harry->age = 28;
$harryString = serialize($harry);
echo "Harry is now serialized in the following string: '$harryString' <br> ";
echo "Converting '$harryString' back to an object... <br> ";
echo "Harry's age is: $harry->age <br> ";
$obj = unserialize($harryString);
echo "Harry's age is: $obj->age <br> ";

echo "<br> <br>";

$x = "Snail" ;
$h = serialize($x);
echo $h;

echo "<br> <br>";

class User
{
    public $username;
    public $password;
    public $loginsToday;
    public function __sleep()
    {
        // (Clean up; close database handles, etc)
        return array( "username", "password" );
    }
}

$user = new User;
$user->username = "harry";
$user->password = "monkey";
$user->loginsToday = 3;
echo "The original user object: <br> ";
print_r($user);
echo " <br> <br> ";
echo "Serializing the object... <br> <br> ";
$userString = serialize($user);
echo "The user is now serialized in the following string: <br> ";
echo "$userString <br> <br> ";
echo "Converting the string back to an object... <br> <br> ";
$obj = unserialize($userString);
echo "The unserialized object: <br> ";
print_r($obj);

echo "<br> <br>";

class User1
{
    public $username;
    public $password;
    public $loginsToday;
    function __construct()
    {
        print_r(get_object_vars($this));
        echo "<br>";
        print_r(array_keys(get_object_vars($this)));
        echo "<br>";
    }
    public function __sleep()
    {
    // (Clean up; close database handles, etc)
        return array_keys(get_object_vars($this));
    }
}
$u1 = new User1;
$u1->username = "harry";
$u1->password = "monkey";
$u1->loginsToday = 3;
echo "The original u1 object: <br> ";
print_r($u1);
echo " <br> <br> ";
echo "Serializing the object... <br> <br> ";
$userString = serialize($u1);
echo "The u1 is now serialized in the following string: <br> ";
echo "$userString <br> <br> ";
echo "Converting the string back to an object... <br> <br> ";
$obj = unserialize($userString);
echo "The unserialized object: <br> ";
print_r($obj);

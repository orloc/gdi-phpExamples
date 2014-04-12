<?php
/*
 * Variables are dynamically typed in PHP
 * This means variables types are figured out
 * at run time.
 * 
 * This can lead to some unexpected results 
 * so be mindful
 */


// null 
$foo = null;

// boolean
$far = true;

// integer
$bar = 5;

// float
$baz = 1.2;

//string
$bez = 'foo';
$bex = "bar\n";


// =================================================

/*
 * Here is an example of weirdness
 * mentioned above
 */
$exampleOfWeirdness = $far + $bar;

// This will equal 6 !?!?
echo "Example Weirdness: $exampleOfWeirdness\n\n";


// ** To avoid unexpected results you can cast variables when nessicary 


/* 
 * Because we casted $far to and integer, 
 * we now expect it to equal 1 as true = 1 and false = 0
 * you can also cast things to:
 * bool
 * string
 * float
 */
$castedExample = (int)$far + $bar;
echo "Now that we are casting its no longer so strange: $castedExample\n\n";


// =================================================


// Variables can also hold arrays and objects
$arr = array();


/* 
 * Arrays have two types:
 * Indexed and Associative 
 * 
 * Associative arrays are also called hash's
 */
$indexedArray = array('foo', 'bar', 'baz');

$associativeArray = [
    'foo' => 1,
    'bar' => 2,
    'baz' => 3
];

echo "Indexed Array:\n";
var_dump($indexedArray);
echo "\nAssociative Array:\n";
var_dump($associativeArray);


// =================================================


/* 
 * Resources are special types
 * They are generally returned by build in functions 
 * to work with database connection, file handles, and
 * other input interfaces
 */

// this returns a file handle, which can read / write (r+) the file
$fileHandle = fopen(__DIR__.'/files/test.txt', 'r+');

// reads one line from the file
$line = fgets($fileHandle);

// echo the line
echo "\n\nHere is the contents of files/test.txt: $line\n\n";

// Constants 

const myNewConstant = 'something';

// =================================================


/*
 * Variables can also hold objects 
 * or serve as references to functions
 */

// this creates a new datetime object
$date = new \DateTime();

echo "I am a PHP DateTime Object\n\n";
var_dump($date);


$functionReference = function ($name = 'John') { 
    return "Hello $name";
};

// you can call this function like you would any other
echo "\nI am the result of a variable that containts a function reference: {$functionReference()}\n\n";

// or pass it a new variable
echo "I am the result of the same function, called with a variable: {$functionReference('Grant')}";


// =================================================

 /*
  * Super Globals
  * There are predefined variables provided by PHP
  * They are special and represent things like enviroment information
  * or server data
  */

// Server and runtime enviroment information
$_SERVER;

// HTTP GET variables
$_GET;

// HTTP POST variables
$_POST;

// HTTP File Upload variables
$_FILES;

// HTTP Request variables 
$_REQUEST;

/* 
 * Session Variables 
 *
 * Wait.. Whats a session??
 *
 * PHP keeps track of each request it serves by exposing a session
 * a session contains a unique ID which can be used to identify the 
 * request.
 * Additionally, you can store things in the session to save 'state'
 * accross multiple requests
 */
$_SESSION;

// HTTP Cookies om nom nom...
$_COOKIE;


if (isset($_GET['var'])){
}

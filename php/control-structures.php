<?php


// Control Structures Part One

$a = 1; 
$b = 2;
$foo = 'bar';
$bar = false;


// ** NOTE if ($a = $b) does not mean if $a equals $b
// This actually evalutes to true, because it is a successful assignment

// If 

if ($a != $bar){ 
    echo '$a != $bar';
}

// If Else

if ($a == $b){ 
    echo '$a == $b, statment is true';
} else {
    echo '$a == $b, statement (expression) is false';
}

// elseif / else if 

if ($a == $b){
    echo 'something';
} elseif ($foo == 'bar') { 
    echo '$foo == bar, the elseif evalutes true';
} else { 
    echo 'I will never get here';
}

// Alternative syntax used in HTML templates go check out php-templating/phpTemplateExmaple1.php


// Switch Statments

/*
 * What if you have like 20 if else blocks? gets messy... 
 * You could use a switch!
 */

$num = mt_rand(0, 10);

switch ($num) {
    case 0:
    case 1:
    case 2:
    case 3:
    case 4:
        echo '0-4';
        break;
}


// return - returns sopmething, or nothing from the current scope
// will also end a script if the next highest scope is standard output
function someFunction(){
    return 'Hello World';
}

echo someFunction();

// include Includes a file into the script, upon failure a warning will be issued
// this is helpful when pulling in configuration
$config = include __DIR__.'/files/config.php';

// include_once -- same as include, but will only ever happen once

// require -- same a include but will throw a PHP FATAL error on failure

// this is actually more correct as configuration files are generally REQUIRED for an application to run
$config = require __DIR__.'/files/config.php';

// require also has a require_once version of itself

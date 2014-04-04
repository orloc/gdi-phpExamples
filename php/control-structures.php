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

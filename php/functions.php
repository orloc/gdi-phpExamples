<?php

/* 
 * Functions -- encapsulate segments of code
 * They take arguments called parameters, order MATTERS!
 */
function add($a, $b) { 
    return $a+$b;
}


// You can type hint the parameters in a functions definition
function arrayPop(array $array){
    $val = $array[count($array)];
    unset($array[count($array)]);

    return $val;
}


// You can call a function like this
echo add(1,2);


// Static functions are a bit different you call them like this
// this returns an instance of \DateTime
$dateTime = DateTime::createFromFormat('M/j/Y', 'April/01/2014');


//You can call functions off objects like this
echo $dateTime->getTimestamp();


// Lastely there are annonomous functions/ There are also called lambdas or closures
// these have some unique properties and specific use cases
$function = function($val){
    echo $val;
};

$function('mewo');

// Magic Methods are built in PHP methods that have special behavior.
// ALL magic methods begin with __

// As a general rule you should NOT prepend your function names with __

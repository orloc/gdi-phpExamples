<?php

/*
 * There are four types of loops in PHP
 * for 
 * while 
 * do while
 * foreach
 *
 * I set up some varibles to show how these work
 */

$exampleArray = array(
    'for' => array(), 
    'while' => array(), 
    'do-while' => array(),
);

$i = 0;

/*
 * This is a standard for loop
 * You can read this in english like
 * for $i = 0, while $i < 10, increment $i 
 */
for( $i; $i < 10; $i++ ){
    $exampleArray['for'][] = $i;
}

/* 
 * This is a while loop
 * You can read this in english like
 * While (condition)
 */
while ($i != 0) {
    $exampleArray['while'][] = $i;
    $i--;
}

/* 
 * This is a do-while loop
 * You can read this in english like
 * do { stuff } while (condition)
 */
do { 
    $exampleArray['dowhile'][] = $i;
    $i++;
} while ($i < 10 );


// Note when the conditional is evaluated between while and do-while


/* 
 * This is a foreach loop
 * Foreach loops are used to iterate 
 * over all values in an array
 * You can read them in english like
 * foreach $array as $arrayKey => $arrayValue
 * 
 * Note that we are traversing a multi-dimensional array
 */
foreach ($exampleArray as $key => $nestedArray) { 
    echo "Key: $key\n\n";
    foreach ($nestedArray as $val){ 
        echo "$val\n";
    }
}


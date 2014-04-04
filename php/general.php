<?php // this is a php opening tag you should not use short tags <?

// This is a comment
# This is also a comment

/*
 * This is a docblock comment 
 */

// Arithmetic Operations

$a = 2;
$b = 8;
echo '$a = 2, $b = 8';

// Negation
echo 'Negation: -$a'."\n";
echo -$a."\n\n";


// Addition
echo 'Addition: $a+$b'."\n";
echo $a+$b."\n\n";

// Subtraction
echo 'Subtraction: $a-$b'."\n";
echo $a-$b."\n\n";

// Multiplication
echo 'Multiplication: $a*$b'."\n";
echo $a*$b."\n\n";

// Division
echo 'Division: $a/$b'."\n";
echo $a/$b."\n\n";

// Modulus
echo 'Modulus : $b % $a'."\n";
echo $b%$a."\n";

echo 'Modulus : $a % $b'."\n";
echo $a%$b;


// Concatination - a series of interconnected things or events
$foo = 'Hello';
$bar = 'World';

echo "\n".$foo.' '.$bar."\n\n";

// Additional Assignment Operators
$a += 2;
$a -= 2;
$foo .= $bar;

// Interpolation -  to put (something) between other things
echo "$foo";


/* 
 * Comparison Operators 
 */

// Equal to
$a == $b;

// Identical  Equal to AND of the same type
$a === $b;

// Not Equal
$a != $b; // use this one 
$a <> $b;

// Not Identical True if $a != $b OR they are not the same type
$a !== $b;

// Greater than
$a > $b;
 
// Less than
$a < $b;

// Less than or Equal to
$a <= $b;

// Greater than or equal to
$a >= $b;


/* 
 * Logical Operators
 */

// Not -- TRUE if $a is not TRUE
!$a;

// And -- TRUE if both $a and $b are true 
$a && $b; 

// Or -- TRUE if $a or $b are true
$a || $b;




/* 
 * Helpfull functions
 */

var_dump('anything'); // outputs anything

echo 'hello world'; // outputs strings

$className = get_class(new \DateTime()); // returns the class name

$methods = get_class_methods(new \DateTime()); // returns an array of methods

var_dump($methods);


/*
 * References and documentation
 *
 * The php bible: http://www.php.net
 *
 * AMAZING Best practice Docs: http://www.phptherightway.com/
 *
 * Some Popular Frameworks to Checkout: https://github.com/codeguy/php-the-right-way/wiki/Frameworks 
 * try silex or laravel, if your bold full-stack symfony 2
 */

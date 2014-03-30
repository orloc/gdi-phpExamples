<?php // this is a php opening tag you should not use short tags <?

// This is a comment
# This is also a comment

/*
 * This is a docblock comment 
 */

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

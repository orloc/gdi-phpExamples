<?php

// Require our model file and make a new instance of that class we made.
require __DIR__.'/model.php';

$db = new Model();

//First lets check to see if we have a post request
$request_method = $_SERVER['REQUEST_METHOD'];
if ($request_method === 'POST'){

    //  We can just pass our post values (from our form)
    // into the function we created in our Model class
    // if it returns true, we have successfuly added a new 
    // record to our database
    if ($db->insert($_POST['title'], $_POST['author'], $_POST['body'], $_POST['tags'])) {
        // add a message to the session to show the user
        $_SESSION['gdi']['flashes']['success'] = 'Successfully added a post!';
    } else {
        // add a failure message to show to the user
        $_SESSION['gdi']['flashes']['error'] = 'We are unable to process your post';
    }
} 


// grab all the posts and give them to the view

// Retrieve will return our statment so we can fetch the results
$pdoResponse = $db->retrieve();


return $pdoResponse->fetchAll();

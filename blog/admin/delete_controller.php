<?php

// Require our model file and make a new instance of that class we made.
require __DIR__.'/model.php';

$db = new Model();

// check the query string and grab our id
// if this does not exist we redirect them back to the 
// main page
if (isset($_GET['id'])){
    $postId = $_GET['id'];

    //First lets check to see if we have a post request
    $request_method = $_SERVER['REQUEST_METHOD'];
    // If its a POST (we are submitting a form)
    if ($request_method === 'POST'){
        // call our update method with the information we need
        if($db->delete($postId)){
            $_SESSION['gdi']['flashes']['success'] = 'Successfully deleted a post!';

            // if we are successfull we want to redirec the user back to the origional page
            header('Location: admin_view.php');
        } else {
            $_SESSION['gdi']['flashes']['error'] = 'We are unable to delete your post';
        }
    } 


    // grab only the post we want
    $post = $db->retrieve(array('id'=> $postId))
        ->fetch();

    return $post;

} else { 

    // Remeber that flash message we made before? Lets use it again here!
    $_SESSION['gdi']['flashes']['error'] = 'You must tell us a post to delete!';
    header('Location: admin_view.php');
}

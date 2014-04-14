<?php

// Note we have started the session again
session_start();

$post = include __DIR__.'/delete_controller.php';

?>
<!DOCTYPE html>
<html>
    <title>Blog Posts</title>

    <link rel="stylesheet" type="text/css" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css"/>

    <style>
        .content { 
            margin-top: 5em;
        }

        h1 { 
            text-transform: uppercase;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-fixed-top navbar-inverse" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#php101Nav">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="php101Nav">
            <ul class="nav navbar-nav">
                <li class=""><a href="admin_view.php">Blog Admin</a></li>
            </ul>
        </div>
    </nav>
    <div class="container-fluid content">
        <div class="row">
            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
            <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                <h1 class="text-center">Edit Post</h1>
                <p>Are you sure you want to delete this post?</p>
                <form method="POST" action="<?php $_SERVER['PHP_SELF'] ?>" role="form">
                    <!-- We are storing a hidden value here for security reasons -->
                    <input name="id" type="hidden" value="<?php echo $post['id'] ?>"></input>
                    <button type="submit" class="btn btn-block btn-danger">Delete</button>
                </form>
            </div>
            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
        </div>
    </div>
</body>
</html>

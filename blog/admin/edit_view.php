<?php

// Note we have started the session again
session_start();

$post = include __DIR__.'/edit_controller.php';

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
                <form method="POST" action="<?php $_SERVER['PHP_SELF'] ?>" role="form">
                    <div class="form-group">
                    <input class="form-control" name="title" type="text" placeholder="Title" value="<?php echo $post['title'] ?>"/>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" name="author" placeholder="Author" value="<?php echo $post['author'] ?>"/>
                    </div>
                    <div class="form-group">
                        <p class="small"><i>Tags must be comma seperated</i></p>
                        <input class="form-control" type="text" name="tags" placeholder="Tags" value="<?php echo $post['tags'] ?>"/>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" rows="10" name="body" placeholder="Content of your post..."><?php echo $post['body'] ?></textarea>
                    </div>
                    <button type="submit" class="btn btn-block btn-success">Update</button>
                </form>
            </div>
            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
        </div>
    </div>
</body>
</html>

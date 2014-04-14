<?php
    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    session_start();

    $posts = include __DIR__.'/admin_controller.php';

    if (isset($_SESSION['gdi']['flashes'])){
        if (count($_SESSION['gdi']['flashes']['error'])){
            $errors = $_SESSION['gdi']['flashes']['error'];
        }
        if (count($_SESSION['gdi']['flashes']['success'])){
            $success = $_SESSION['gdi']['flashes']['success'];
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Blog Admin</title>

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
                <li class="active"><a href="#">Blog Admin</a></li>
            </ul>
        </div>
    </nav>
    <div class="container-fluid content">
        <div class="row">
            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
            <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">

                <!-- Here we display our flash messages -->
                <?php if (isset($success)): ?>
                    <div class="alert alert-success">
                    <?php echo $success ?>
                    </div>
                <?php elseif (isset($error)): ?>
                    <div class="alert alert-danger">
                    <?php echo $error ?>
                    </div>
                <?php endif ?>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">   
                        <!-- fill in my action and method remember GET vs POST -->
                        
                        <h1 class="text-center">Add a Post</h1>
                        <form method="POST" action="<?php $_SERVER['PHP_SELF'] ?>" role="form">
                            <div class="form-group">
                                <input class="form-control" name="title" type="text" placeholder="Title"/>
                            </div>
                            <div class="form-group">
                                <input class="form-control" name="author" type="text" placeholder="Author"/>
                            </div>
                            <div class="form-group">
                                <p class="small"><i>Tags must be comma seperated</i></p>
                                <input class="form-control" name="tags" type="text" placeholder="Tags"/>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="body" type="text" placeholder="Content of your post..."></textarea>
                            </div>
                            <button type="submit" class="btn btn-block btn-success">Add a new post!</button>
                        </form>
                        <!-- end form -->
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                        <h1>Admin Post Details</h1>
                        <table class="table table-stripped">
                            <tr>
                                <td>ID</td>
                                <th>Title</th>
                                <th>Author</th>
                                <th>Tags</th>
                                <th></th>
                                <th></th>
                            </tr>
                            <!-- table body -->
                            <?php foreach($posts as $p): ?>
                                <tr>
                                    <td><?php echo $p['id'] ?></td>
                                    <td><?php echo $p['title'] ?></td>
                                    <td><?php echo $p['author'] ?></td>
                                    <td><?php echo $p['tags'] ?></td>
                                    <td><a href="/edit_post.html?id=<?php echo $p['id']?>" class="btn btn-block btn-info">Edit</a></td>
                                    <td><a href="#" class="btn btn-block btn-danger">Delete</a></td>
                                </tr>
                            <?php endforeach ?>
                        </table> 
                    </div>
                </div>
            </div>
            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
        </div>
    </div>
</body>
</html>

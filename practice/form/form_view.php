<?php
// include our controller and assign it to a variable
?>
<!DOCTYPE html>
<html>
<head>
    <title>PHP My First Form</title>

    <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css"/>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"></div>
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
    <!-- you will need to specify your action -->
                <form action="" method="POST">
                    <div class="form-group">
                        <input type="text" placeholder="First Name"/>
                    </div>
                    <div class="form-group">
                        <input type="text" placeholder="Last Name"/>
                    </div>
                </form>
                <button type="submit" class="btn btn-success">Submit</button>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"></div>
        </div>
        <div class="row">
            <!-- output your data here -->
        </div>
    </div>
</body>
</html>

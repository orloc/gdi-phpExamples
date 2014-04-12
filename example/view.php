<?php
$csvData = include __DIR__.'/parser.php';

?>
<!DOCTYPE html>
<html>
<head>
    <title>PHP Templating Exmaple 1</title>

    <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css"/>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"></div>
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                <table class="table table-stripped">
                    <tr>
<!-- -->
                        <?php foreach ($csvData['headers'] as $h): ?>
                        <th><?php echo $h ?></th>
                        <?php endforeach ?>
                    </tr>
                    <?php foreach($csvData['data'] as $data): ?>
                        <tr>
                        <?php foreach ($data as $columns): ?>
                        <td><?php echo $columns ?></td> 
                        <?php endforeach ?> 
                        </tr>
                    <?php endforeach ?>
                </table>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"></div>
        </div>
    </div>
</body>
</html>

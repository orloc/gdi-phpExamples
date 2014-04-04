<?php
    $myPeople = array (
        array(
            'name' => 'Charles Babbage',
            'fields' => array('mathematics', 'engineering', 'computer science', 'political economy'),
            'contribution' => 'Credited with the conept for the programable computer'
        ),
        array(
            'name' => 'Alan Turing',
            'fields' => array('mathematics', 'logician', 'computer science', 'cryptanalyst', 'philosopher'),
            'contribution' => 'Inventor / Father of modern computing'
        ),
        array(
            'name' => 'Miss Augusta Ada King, Countes of Lovelace (Ada Lovelace)',
            'fields' => array('countess', 'mathematician'),
            'contribution' => 'The first computer progammer ever. Translated documents to run on Charles Babbages analytical engine, making the first algorithm ever.'
        ),
        array(
            'name' => 'Grace Murray Hopper',
            'fields' => array('US Navy Rear Admril', 'computer science', ),
            'contribution' => 'One of the first programers ever.  Wrote the first compiler for a computer language ever. Credited with the popularization of \'debugging\'.'
        ),
        array(
            'name' => 'Jean Bartik',
            'fields' => array('mathematics', 'computer science'),
            'contribution' => 'Played a major role in working on the first digital, Turing-Complete computer ever constructed (ENIAC)'
        )
    );
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
            <?php if (count($myPeople)): ?>
                <table class="table table-stripped">
                    <tr>
                        <th>Index</th>
                        <th>Name</th>
                        <th>Fields</th>
                        <th>Contribution</th>
                    </tr>
                    <?php foreach($myPeople as $index => $person): ?>
                        <tr>
                            <td><?php echo $index ?></td>
                            <td><?php echo ucfirst($person['name']) ?></td>
                            <td><?php foreach($person['fields'] as $f){ echo ucfirst($f).', '; } ?></td>
                            <td><?php echo $person['contribution'] ?></td>
                        </tr>
                    <?php endforeach ?>
                </table>
            <?php  endif ?>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"></div>
        </div>
    </div>
</body>
</html>

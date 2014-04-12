<?php
// configuration

$conf = array(
    'type' => 'mysql',
    'host' => 'localhost',
    'db_name' => 'gdi_examples',
    'user' => 'root',
    'pass' => 'password'
);

// connection
$dbh = new \PDO(
    "mysql:host={$conf['host']};{$conf['db_name']}", 
    $conf['user'], 
    $conf['pass']
);

// Insert

$insertSql = "INSERT INTO tableName (column1, column2, column3) VALUES (:col1, :col2, :col3)";
$q = $dbh->prepare($insertSql);

// you can also do parameter binding directly

// $q->bindParam(":col1", 1, \PDO::PARAM_INT);

$q->execute(array(
    ':col1' => 1,
    ':col2' => 2,
    ':col3' => 3
));



// Lets find our value!

// values to search with 
$val1 = 1;
$val2 = 2;

// our statment
$query = "SELECT * FROM tableName WHERE column1=:gval1 AND column2=:val2";

$q2 = $dbh->prepare($query);

$q2->bindParam(":val1", $val1, \PDO::PARAM_INT);
$q2->bindParam(":val2", $val2, \PDO::PARAM_INT);

// this will grab each row in our result
while ($result = $q2->fetch(PDO::FETCH_ASSOC)){
    var_dump($result);
}

// Update

// the values we wish to update
$val1  = 2; 
$val2 = 3;
$id = 1;

$query = "UPDATE tableName 
    SET column1=?, column2=?
    WHERE id=?";

$q3 = $dbh->prepare($query);

$result = $q3->execute(array($val1, $val2, $id));

// DELETE


// Queries



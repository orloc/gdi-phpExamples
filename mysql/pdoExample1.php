<?php
// configuration

$conf = array(
    'type' => 'mysql',
    'host' => 'localhost',
    'db_name' => 'gdi_blog',
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

$insertSql = "INSERT INTO posts (title, author, body) VALUES (?, ?, ?)";
$q = $dbh->prepare($insertSql);

// you can also do parameter binding directly

// $q->bindParam(1, 1, \PDO::PARAM_INT);

$q->execute(array(
     'Post',
     'Grant',
     'This is just a test'
));


// Lets find our value!

// values to search with 
$val1 = 1;
$val2 = 2;

// our statment
$query = "SELECT * FROM posts WHERE author=:val AND create_at<= CURRENT_TIMESTAMP()";

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

$query = "DELETE FROM tableName WHERE id=?"
$q4 = $dbh->prepare($query);
$id = 1;

$result = $q4->execute(array($id));

// Queries


 */

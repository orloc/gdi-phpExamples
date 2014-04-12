<?php

class Model { 

    public $conf = array(
        'type' => 'mysql',
        'host' => 'localhost',
        'db_name' => 'gdi_blog',
        'user' => 'root',
        'pass' => 'password'
    );

    public $dbh;

    public $table;

    public function __construct($table='posts'){
        $this->dbh = new \PDO(
            "mysql:host={$this->conf['host']};dbname={$this->conf['db_name']}", 
            $this->conf['user'], 
            $this->conf['pass']
        );

        $this->table = $table;
    }


    public function insert($title, $author, $body, $tags){ 
       $query="INSERT INTO {$this->table} (title, author, body, tags) VALUES (?,?,?,?)"; 

       $statement = $this->dbh->prepare($query);

       return $statement->execute(array(
           $title,
           $author, 
           $body,
           $tags
       ));
    }

    public function update(){}

    public function retrieve(array $conditionals = array()){
        $query = "SELECT * FROM {$this->table}";
        if (count($conditionals)){
            $query .=" WHERE ";
            $wheres = array();
            foreach($conditionals as $key => $value){
                $wheres[] = $key . ' = ? ';
            }

            $query .= join(' AND ', $wheres);
            
            $statement = $this->dbh->prepare($query);

            return $statment->execute(array_values($conditionals));
        }

        
        $statement = $this->dbh->prepare($query);
        return $statment->execute();
    }

    public function delete($id){
        $query = 'DELETE FROM '.$this->tableName.' WHERE id = ?';

        $statement = $this->dbh->prepare($query);

        return $statment->execute(array($id));
    }
}




$database = new Model();

$result = $database->insert('new post', 'my name', 'some content', 'tags,1,2,4');

$database->retrieve(array('id' => 1, 'author' => 'grant'));




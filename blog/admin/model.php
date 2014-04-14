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

    public function update($id, $title, $author, $body, $tags){

        $query = "UPDATE {$this->table} 
            SET title=?, author=?, body=?, tags=?
            WHERE id=?";

        $statement = $this->dbh->prepare($query);

        return $statement->execute(array(
            $title, 
            $author, 
            $body, 
            $tags,
            $id
        ));
    }

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

            $statement->execute(array_values($conditionals));

            return $statement;
        }

        
        $statement = $this->dbh->prepare($query);
        $statement->execute();

        return $statement;
    }

    public function delete($id){
        $query = 'DELETE FROM '.$this->table.' WHERE id = ?';

        $statement = $this->dbh->prepare($query);

        return $statement->execute(array($id));
    }
}





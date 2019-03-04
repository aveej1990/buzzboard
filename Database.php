<?php

class Database {

    private $host='localhost';
    private $user='root';
    private $password='root';
    private $databse='ci';

    protected $conn;

    public function __construct()
    {
        if (!isset($this->conn)) {

            $this->conn = new mysqli($this->host, $this->user, $this->password, $this->databse);
            
            if (!$this->conn) {
                echo 'Cannot connect to database server';
                exit;
            }            
        }    
        
        return $this->conn;
    }
 

}


?>
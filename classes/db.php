<?php
class dbhelper
{
    private $connection;
    private $host = "localhost";
    private $user = "root";
    private $password = "magic";
    private $database = "paint_db";
    
    public function __construct() {
        $this->connection = mysqli_connect($this->host, $this->user, $this->password, $this->database);
    }
    
    public function isConnected()
    {
        if(mysqli_connect_errno($this->connection))
        {
           return false ;
        }
        return true;
    }
}
?>
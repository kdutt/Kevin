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
    public function __destruct() {
        mysqli_close($this->connection);
    }
    
    public function isConnected()
    {
        if(mysqli_connect_errno($this->connection))
        {
           return false ;
        }
        return true;
    }
    
    public function select($sql)
    {
        
    }
    public function insert($sql)
    {
        if($this->isConnected())
        {
            mysqli_query($this->connection, $sql);
            return mysqli_insert_id($this->connection);
        }
    }
    public function update($sql)
    {
        
    }
}
?>
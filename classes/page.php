<?php
require_once("../classes/includes.php");

class page
{
    private $id = 0;    
    private $name = "";

    public function __construct()
    {
        
    }
    public function load($myPageId)
    {
        $this->id = $myPageId;
        $this->name = "loadpage";
    }
    
    public function save()
    {
        
    }
    public function getId()
    {
        return $this->id;
    }
    
    public function getName()
    {
        return $this->name;
    }
    
    public function setName($newName)
    {
        $this->name = $newName;
    }
}

?>
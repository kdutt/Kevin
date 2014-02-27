<?php
require_once("../classes/includes.php");

class page
{
    private $id = 0;
    
    private $name = "";
    private $mycat;
    private $categories = array();

    public function __construct()
    {
        
    }
    public function load($myPageId)
    {
        $this->id = $myPageId;
        $this->name = "loadpage";
        
        $this->categories = new cats();
        echo "we get here";
    }
    
    public function save()
    {
        
    }
    public function getId()
    {
        return $this->id;
    }
    public function getCats()
    {
        return $this->categories;
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
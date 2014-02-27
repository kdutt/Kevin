<?php
require_once("../classes/includes.php");

class page
{
    private $id = 0;
    public $name = "";
    private $categories = array();

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
}

?>
<?php
require_once("../classes/includes.php");

class page
{
    private $id = 0;
    private $name = "";
    private $categories = array();

    public function __construct()
    {
        
    }
    public function get($myPageId)
    {
        $this->id = $myPageId;
        $this->name = "loadpage";
    }
    
    public function save()
    {
        
    }
}

?>
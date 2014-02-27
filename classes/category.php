<?php
require_once("../classes/includes.php");

//this class is my category class
class cats
{
    private $catarray = array();
    public static function __construct($id) {
        
        $cat1 = new cat();
        $cat2 = new cat();
        $cat3 = new cat();
        
        $cat1->changeName("cat1");
        $cat2->changeName("cat2");
        $cat3->changeName("cat3");
        
        $this->catarray = array($cat1, $cat2, $cat3);
        
        return $this->catarray;
    }
}
class cat
{
    private $catId = 1;
    private $name = "";

    public function __construct()
    {
        //create a new category.
        //insert into db
    }

    function changeName($strname)
    {
        if($this->catId != 0)
        {
            $this->name = $strname;
        }
        else
        {
            return false;
        }
        return true;
    }
    
    function saveCat()
    {
            //save category to db.
            //update stuff
    }
    public function getname()
    {
        return $this->name;
    }
}

?>

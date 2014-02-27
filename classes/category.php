<?php
require_once("../classes/includes.php");

//this class is my category class
class cat
{
    private $catId = 0;
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
}

?>

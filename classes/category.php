<?php
require_once("../classes/includes.php");

//this class is my category class
class cat
{
	private int $catId = 0;
	private string $name = "";
	
	public __construct(int $id)
	{
		//get category by id.
	}
	public __construct(string $name)
	{
		//create a new category.
		//insert into db
	}
	
	function changeName($strname)
	{
		if($catId != 0)
			$name = $strname;
		else
			return false;
		return true;
	}
	
	function saveCat()
	{
		//save category to db.
		//update stuff
	}
}

?>

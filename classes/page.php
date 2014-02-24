<?php
require_once("../classes/includes.php");

class page
{
	
	private $id = 0;
	private $name = "";
	
	private $categories = array();
	
	public function __construct($myPageId)
	{
		//get page by id.
		//$row = $DB->GetRow("select page_id, parent_id, name, date_from, date_to, year, about, picture from page where page_id='" . $_GET["pageid"] . "'");
	}
	//public __construct()
	//{
		//create a new page.
		//insert into db
	//}
	
	
}

?>
<?php
class page
{
    private $id = 0;    
    private $name = "";

    public function __construct()
    {
        
    }
    public function load($myPageId)
    {
        $db = new dbhelper();
        $sql = "select page_id, parent_id, name, date_from, date_to, year, about from page";
        $result = $db->select($sql);
        
        $this->id = $myPageId;
        
        $this->name = "loadpage";
    }
    
    public function save()
    {
        if($this->id == 0)
        {
            $this->createnewpage();
        }
        else
        {
            $this->updatepage();
        }
        
    }
    private function updatepage()
    {
        $sql = "update page set name = '" . $this->name . "' where id = '" . $this-> id . "'";
        $db = new dbhelper();
        $db->update($sql);
    }
    private function createnewpage()
    {
        $sql = "insert into page (name) values ('" . $this->name . "')";
        $db = new dbhelper();
        $result = $db->insert($sql);
        $this->id = $result;
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
<?php
        require_once("classes/page.php");
        require_once("classes/db.php");
?>
<html>
<head>
</head>
<body>
Hello World!
a change
asdf
<?php echo "hi" ?>
<a href="admin/index.php">Admin</a>
test
<?php
    $dbh = new dbhelper();
    
    if($dbh->isConnected())
    {
        echo "true";
    }
    else
    {
        echo "false";
    }
    
    
?>
</body>
</html>
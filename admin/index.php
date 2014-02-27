<?php
	require_once("../classes/includes.php");
?>
<html>
<head>
</head>
<body>
    //menu<br />
        --pages<br />
        <a href="cat.php">--categories</a><br />
        <br /><br />
        --stats?<br />
    Hi
    <a href="pages.php">Page</a>
    <?php
        $mypage = new page();
        $mypage->load(1);
        $mypage->setName("test");
        
        printf($mypage->getId());
        printf($mypage->getName());
        
        $myarry = new $mypage->getCats(1);
        
        echo "ok";
        echo $myarry->getCat(1);
        
        echo "test";
        
        foreach($myarry as $mycat)
        {
            echo $mycat->getname() + "<br />";
        }
    ?>
</body>
</html>
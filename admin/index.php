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
    Hi asdf
    <a href="pages.php">Page</a>
    <?php
        $mypage = new page();
        $mypage->load(1);
        $mypage->name = "test";
        printf($mypage->getId());
        printf($mypage->name);
    ?>
</body>
</html>
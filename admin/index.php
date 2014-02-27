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
        printf("test");
        $mypage = new page();
        printf("test2");
        $mypage->get(1);
        printf("test3");
        printf($mypage->id);
        printf("test4");
    ?>
</body>
</html>
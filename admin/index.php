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
        $mypage->get(1);
        printf($mypage->id);
        printf("test");
    ?>
</body>
</html>
<?php
        require_once("../classes/page.php");
?>
<html>
<head>
</head>
<body>
Page Saved.
<?php
    $pName = filter_input(INPUT_POST, 'page_name', FILTER_SANITIZE_URL);

    $page = new page();
    echo "test";
    $page->setName($pName);
    echo "test2";
    $page->save();
    echo "test3";
?>
</body>
</html>
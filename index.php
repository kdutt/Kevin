<html>
<head>
</head>
<body>
Hello World!
a change
asdf
<?php echo "hi" ?>
<?php

class testclass
{
    var $test = "asdf";
    function rename()
    {
        $this->test = "rename";
    }
}

$newtest = new testclass();

$newtest->rename();
$newtest->test = "hi";

?>
</body>
</html>
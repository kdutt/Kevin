<?php
	require_once("../classes/includes.php");
	
	$myPage;
	
	//if (isset($_GET["pageid"]) || !empty($_GET["pageid"])) {
		//$myPage = new page($_GET["pageid"]);
	//}
?>
<html>
<head>
</head>
<body>
<form action="save_page.php" method="post">
	<p>Name: <input name="page_name" type="text" /> Year/Generation: <input name="generation" type="text" /></p>
	<p>Thumbnail: <input name="pic" type="file" />
	<p>Date From: <input name="date_from" type="text" /> Date To: <input name="date_to" type="text" /></p>
	<p>About: <input name="about" type="text" /></p>
	<p><input type="submit" value="save" /></p>
</form>
</body>
</html>
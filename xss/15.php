<!DOCTYPE html><!--STATUS OK--><html>
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8">
<title>xss15</title>
</head>
<body>
<h1 align=center>可执行tag中双引号包裹的contents(无过滤)</h1>


<?php 
ini_set("display_errors", 0);
$str = $_GET["keyword"];
echo "<script>\"".$str."\";</script>";
echo '<center>
<form action=15.php method=GET>
<input name=keyword  >
<input type=submit name=submit value="搜索"/>
</form>
</center>';
?>

</body>
</html>

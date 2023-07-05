<!DOCTYPE html><!--STATUS OK--><html>
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8">
<title>xss12</title>
</head>
<body>
<h1 align=center>src属性(htmlspecialchars过滤)</h1>


<?php 
ini_set("display_errors", 0);
$str = $_GET["keyword"];
echo "<iframe src='".htmlspecialchars($str)."'>click</iframe>";
echo '<center>
<form action=12.php method=GET>
<input name=keyword  >
<input type=submit name=submit value="搜索"/>
</form>
</center>';
?>

</body>
</html>

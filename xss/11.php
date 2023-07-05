<!DOCTYPE html><!--STATUS OK--><html>
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8">
<title>xss11</title>
</head>
<body>
<h1 align=center>src属性</h1>


<?php 
ini_set("display_errors", 0);
$str = $_GET["keyword"];
echo "<iframe src='".$str."'>click</iframe>";
echo '<center>
<form action=11.php method=GET>
<input name=keyword  >
<input type=submit name=submit value="搜索"/>
</form>
</center>';
?>

</body>
</html>

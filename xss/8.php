<!DOCTYPE html><!--STATUS OK--><html>
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8">
<title>xss8</title>
</head>
<body>
<h1 align=center>单引号包含普通属性(单引号过滤)</h1>
<?php 
ini_set("display_errors", 0);
$str = $_GET["keyword"];
$str = str_replace("'", "&#39;", $str);
echo "<h2 align=center >".htmlspecialchars($str)."</h2>";
echo '
<form action=8.php method=GET>
<input name=keyword  value=\''.$str.'\'>
<input type=submit name=submit value="搜索"/>
</form>
</center>';
?>
<?php 
echo "<h3 align=center>payload的长度:".strlen($str)."</h3>";
?>
</body>
</html>


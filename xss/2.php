<!DOCTYPE html><!--STATUS OK--><html>
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8">
<title>xss2</title>
</head>
<body>
<h1 align=center>普通节点的contents(尖括号<>过滤)</h1>
<?php 
ini_set("display_errors", 0);
$str = $_GET["keyword"];
// 将 < 替换为 &lt;
$str = str_replace("<", "&lt;", $str);
// 将 > 替换为 &gt;
$str = str_replace(">", "&gt;", $str);
echo "<h2 align=center>".$str."</h2>";
echo '<center>
<form action=2.php method=GET>
<input name=keyword  >
<input type=submit name=submit value="搜索"/>
</form>
</center>';
?>
<?php 
echo "<h3 align=center>payload的长度:".strlen($str)."</h3>";
?>
</body>
</html>


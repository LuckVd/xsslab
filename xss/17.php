<!DOCTYPE html><!--STATUS OK--><html>
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8">
<title>xss17</title>
</head>
<body>
<h1 align=center>可执行tag中双引号包裹的contents(引号、尖括号过滤)</h1>


<?php 
ini_set("display_errors", 0);
$str = $_GET["keyword"];
$str = str_replace("\"", "&quot;", $str);
// 将 < 替换为 &lt;
$str = str_replace("<", "&lt;", $str);
// 将 > 替换为 &gt;
$str = str_replace(">", "&gt;", $str);
echo "<script>\"".$str."\";</script>";
echo '<center>
<form action=17.php method=GET>
<input name=keyword  >
<input type=submit name=submit value="搜索"/>
</form>
</center>';
?>

</body>
</html>

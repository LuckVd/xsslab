<!DOCTYPE html><!--STATUS OK--><html>
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8">
<title>xss10</title>
</head>
<body>
<h1 align=center>on属性(htmlspecialchars过滤)</h1>


<?php 
ini_set("display_errors", 0);
$str = $_GET["keyword"];
echo "<button onclick=\"".htmlspecialchars($str)."\">click</button>";
echo '<center>
<form action=10.php method=GET>
<input name=keyword  >
<input type=submit name=submit value="搜索"/>
</form>
</center>';
?>

</body>
</html>

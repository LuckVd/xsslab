<!DOCTYPE html><!--STATUS OK--><html>
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8">
<title>xss1</title>
</head>
<body>
<h1 align=center>普通节点的contents(无过滤)</h1>


<?php 
ini_set("display_errors", 0);
$str = $_GET["keyword"];
echo "<h2 align=center>".$str."</h2>";
echo '<center>
<form action=1.php method=GET>
<input name=keyword  >
<input type=submit name=submit value="搜索"/>
</form>
</center>';
?>

</body>
</html>

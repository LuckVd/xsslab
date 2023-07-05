<!DOCTYPE html><!--STATUS OK--><html>
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8">
<title>xss4</title>
</head>
<body>
<h1 align=center>可执行tag中的contents(htmlspecialchars过滤)</h1>


<?php 
ini_set("display_errors", 0);
$str = $_GET["keyword"];
echo "<script>".htmlspecialchars($str)."</script>";
echo '<center>
<form action=4.php method=GET>
<input name=keyword  >
<input type=submit name=submit value="搜索"/>
</form>
</center>';
?>

</body>
</html>

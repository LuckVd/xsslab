<!DOCTYPE html><!--STATUS OK--><html>
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8">
<title>xss13</title>
</head>
<body>
<h1 align=center>href属性</h1>


<?php 
ini_set("display_errors", 0);
$str = $_GET["keyword"];
echo "<h2 align=center >get 参数keyword</h2>";
echo "<a href='".$str."'>click</href>";
echo '<center>
<form action=13.php method=GET>
</form>
</center>';
?>

</body>
</html>

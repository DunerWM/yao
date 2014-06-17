<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
		$conn= mysql_connect('localhost','root','') or die("Can not connect to database.");  
		mysql_query("set names 'utf8'");//设置编码输出
		mysql_select_db('groups');
		//$excelname = isset($_POST['tablename'])?$_POST['tablename']:'';
		$collection = $_GET['collection'];
		$sql = "DELETE FROM `".$collection."`WHERE 1 ";
		mysql_query($sql);
	?>
	<script type="text/javascript">
		location.replace("index.php");
	</script>
</body>
</html>
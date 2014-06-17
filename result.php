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
	$excel_title = $_POST['excel_title'];
	$bbb=1;
	$sss='inputname';
	$ccc=$sss.$bbb;
	$ccc=$ccc.'';
	$collection = $excel_title."result";
	$delsql = "DELETE FROM `".$collection."`WHERE 1 ";
	mysql_query($delsql);
	while(@$_POST[$ccc]!=NULL){
	echo $_POST[$ccc].'<br>';
	$sql = "INSERT INTO ".$collection." values('".$_POST[$ccc]."')";
	mysql_query($sql);
	$bbb=$bbb+1;
	$ccc=$sss.$bbb;
	$ccc=$ccc.'';
}
$savename = $excel_title; 
$file_ending = "xls";
@header("Content-Type: application/$file_type;charset=big5"); 
header("Content-Disposition: attachment; filename=".$savename.".$file_ending");    
?> 	
</body>
</html>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
  <style type="text/css">
    *{margin: 0;padding: 0;}
    ul{list-style: none;}
    .submit li{position: relative;}
    .submit_ever{
      position: absolute;
      height: 
    }
  </style>
</head>
<body>
	<form id="form1" name="form1" method="post" action="">
  <input name="file240" type="file"/>
  <input type="submit" name="Submit240" value="提交" />

  <input name="file150" type="file"/>
  <input type="submit" name="Submit150" value="提交" />

  <input name="file120" type="file"/>
  <input type="submit" name="Submit120" value="提交" />

  <input name="file80" type="file"/>
  <input type="submit" name="Submit80" value="提交" />
  
  <input name="file60" type="file"/>
  <input type="submit" name="Submit60" value="提交" />
</form>
<?php
require_once 'reader.php';  
$data = new Spreadsheet_Excel_Reader(); 
$data->setOutputEncoding('utf8');
$conn= mysql_connect('localhost','root','') or die("Can not connect to database.");  
mysql_query("set names 'utf8'");//设置编码输出
mysql_select_db('resident'); //选择数据库
if (isset($_POST['Submit240']))
{
  $data->read($_POST['file240']);
  for ($i = 1; $i <= $data->sheets[0]['numRows']; $i++) 
  {
      $sql1 = "INSERT INTO excel240 VALUES(null,'".$data->sheets[0]['cells'][$i][1]."','".$data->sheets[0]['cells'][$i][2]."','".$data->sheets[0]['cells'][$i][3]."','".$data->sheets[0]['cells'][$i][4]."')"; 
      mysql_query($sql1);
  }
}
if (isset($_POST['Submit150']))
{
  $data->read($_POST['file150']);
  for ($i = 1; $i <= $data->sheets[0]['numRows']; $i++) 
  {
      $sql2 = "INSERT INTO excel150 VALUES(null,'".$data->sheets[0]['cells'][$i][1]."','".$data->sheets[0]['cells'][$i][2]."','".$data->sheets[0]['cells'][$i][3]."','".$data->sheets[0]['cells'][$i][4]."')";       
      mysql_query($sql2);
  }
}
if (isset($_POST['Submit120']))
{
  $data->read($_POST['file120']);
  for ($i = 1; $i <= $data->sheets[0]['numRows']; $i++) 
  {
      $sql3 = "INSERT INTO excel120 VALUES(null,'".$data->sheets[0]['cells'][$i][1]."','".$data->sheets[0]['cells'][$i][2]."','".$data->sheets[0]['cells'][$i][3]."','".$data->sheets[0]['cells'][$i][4]."')"; 
      mysql_query($sql3);
  }
}
if (isset($_POST['Submit80']))
{
  $data->read($_POST['file80']);
  for ($i = 1; $i <= $data->sheets[0]['numRows']; $i++) 
  {
      $sql4 = "INSERT INTO excel80 VALUES(null,'".$data->sheets[0]['cells'][$i][1]."','".$data->sheets[0]['cells'][$i][2]."','".$data->sheets[0]['cells'][$i][3]."','".$data->sheets[0]['cells'][$i][4]."')"; 
      mysql_query($sql4);
  }
}
if (isset($_POST['Submit60']))
{
  $data->read($_POST['file60']);
  for ($i = 1; $i <= $data->sheets[0]['numRows']; $i++) 
  {
      $sql5 = "INSERT INTO excel60 VALUES(null,'".$data->sheets[0]['cells'][$i][1]."','".$data->sheets[0]['cells'][$i][2]."','".$data->sheets[0]['cells'][$i][3]."','".$data->sheets[0]['cells'][$i][4]."')"; 
      mysql_query($sql5);
  }
}
?>
</body>
</html>
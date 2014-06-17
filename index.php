<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="stylesheets/index.css">
</head>
<body>
	<?php
	require_once 'reader.php';  
	$data = new Spreadsheet_Excel_Reader(); 
	$data->setOutputEncoding('UTF-8');
	$conn= mysql_connect('localhost','root','') or die("Can not connect to database.");  
	mysql_query("set names 'utf8'");//设置编码输出
	mysql_select_db('groups'); //选择数据库
	$sql1 = "SELECT * FROM `group1`";
	$query1 = mysql_query($sql1);
	$fetch1 = mysql_fetch_array($query1);
	$sql2 = "SELECT * FROM `group2`";
	$query2 = mysql_query($sql2);
	$fetch2 = mysql_fetch_array($query2);
	$sql3 = "SELECT * FROM `group3`";
	$query3 = mysql_query($sql3);
	$fetch3 = mysql_fetch_array($query3);
	$sql4 = "SELECT * FROM `group4`";
	$query4 = mysql_query($sql4);
	$fetch4 = mysql_fetch_array($query4);
	$sql5 = "SELECT * FROM `group5`";
	$query5 = mysql_query($sql5);
	$fetch5 = mysql_fetch_array($query5);

	$resql1 = "SELECT * FROM `group1result`";
	$requery1 = mysql_query($resql1);
	$refetch1 = mysql_fetch_array($requery1);
	$resql2 = "SELECT * FROM `group2result`";
	$requery2 = mysql_query($resql2);
	$refetch2 = mysql_fetch_array($requery2);
	$resql3 = "SELECT * FROM `group3result`";
	$requery3 = mysql_query($resql3);
	$refetch3 = mysql_fetch_array($requery3);
	$resql4 = "SELECT * FROM `group4result`";
	$requery4 = mysql_query($resql4);
	$refetch4 = mysql_fetch_array($requery4);
	$resql5 = "SELECT * FROM `group5result`";
	$requery5 = mysql_query($resql5);
	$refetch5 = mysql_fetch_array($requery5);
	?>
	<div class="main">
		<div class="left">
			<div class="tabContent">
				<div class="tabcFir">排队</div>
				<div class="tabcSec border-n">出号</div>
			</div>
			<ul class="ul-Fir">
				<li>
					<?php
						if(empty($fetch1)){
							echo "
								<div>
									<div class='before'>
										<div class='title'>第一组</div>
										<form name='form1' method='post'>
											<input type='file' name='file1' class='fileload display-n'>
											<input type='submit' name='Submit1' class='real-submit1 display-n'>
										</form>
										<div class='file-btn'>上传文件</div>
									</div>
									<div class='after display-n'>
										<div class='title'>第一组</div>
										<div class='submit-btn Submit1'>提交数据</div>
									</div>
								</div>";
						}
						else{
							if(empty($refetch1)){
							echo "
							<form name='retry_form1' action='resubmit.php' method='post'>
								<input type='text' name='tablename' value='group1' style='display:none;'>
							</form>
							<div class='datastatus1'>重新导入</div>
							<div class='begin-scroll'>
								<a href='lineup.php?group=group1' target='work'>开始滚动</a>
							</div>
							";
							}
							else{
								echo "
								<div class='complete'>已完成</div>
								<div class='rerock'>
									<a href='rerock.php?collection=group1result'>重新滚动</a>
								</div>
								";
							}
						}
					?>
				</li>
				<li>
					<?php
						if(empty($fetch2)){
							echo "
								<div>
									<div class='before'>
										<div class='title'>第二组</div>
										<form name='form2' method='post'>
											<input type='file' name='file2' class='fileload display-n'>
											<input type='submit' name='Submit2' class='real-submit2 display-n'>
										</form>
										<div class='file-btn'>上传文件</div>
									</div>
									<div class='after display-n'>
										<div class='title'>第二组</div>
										<div class='submit-btn Submit2'>提交数据</div>
									</div>
								</div>";
						}
						else{
							if(empty($refetch2)){
							echo "
							<form name='retry_form2' action='resubmit.php' method='post'>
								<input type='text' name='tablename' value='group2' style='display:none;'>
							</form>
							<div class='datastatus2'>重新导入</div>
							<div class='begin-scroll'>
								<a href='lineup.php?group=group2' target='work'>开始滚动</a>
							</div>
							";
							}
							else{
								echo "
								<div class='complete'>已完成</div>
								<div class='rerock'>
									<a href='rerock.php?collection=group2result'>重新滚动</a>
								</div>
								";
							}
						}
					?>
				</li>
				<li>
					<?php
						if(empty($fetch3)){
							echo "
								<div>
									<div class='before'>
										<div class='title'>第三组</div>
										<form name='form3' method='post'>
											<input type='file' name='file3' class='fileload display-n'>
											<input type='submit' name='Submit3' class='real-submit3 display-n'>
										</form>
										<div class='file-btn'>上传文件</div>
									</div>
									<div class='after display-n'>
										<div class='title'>第三组</div>
										<div class='submit-btn Submit3'>提交数据</div>
									</div>
								</div>";
						}
						else{
							if(empty($refetch3)){
							echo "
							<form name='retry_form3' action='resubmit.php' method='post'>
								<input type='text' name='tablename' value='group3' style='display:none;'>
							</form>
							<div class='datastatus3'>重新导入</div>
							<div class='begin-scroll'>
								<a href='lineup.php?group=group3' target='work'>开始滚动</a>
							</div>
							";
							}
							else{
								echo "
								<div class='complete'>已完成</div>
								<div class='rerock'>
									<a href='rerock.php?collection=group3result'>重新滚动</a>
								</div>
								";
							}
						}
					?>
				</li>
				<li>
					<?php
						if(empty($fetch4)){
							echo "
								<div>
									<div class='before'>
										<div class='title'>第四组</div>
										<form name='form4' method='post'>
											<input type='file' name='file4' class='fileload display-n'>
											<input type='submit' name='Submit4' class='real-submit4 display-n'>
										</form>
										<div class='file-btn'>上传文件</div>
									</div>
									<div class='after display-n'>
										<div class='title'>第四组</div>
										<div class='submit-btn Submit4'>提交数据</div>
									</div>
								</div>";
						}
						else{
							if(empty($refetch4)){
							echo "
							<form name='retry_form4' action='resubmit.php' method='post'>
								<input type='text' name='tablename' value='group4' style='display:none;'>
							</form>
							<div class='datastatus4'>重新导入</div>
							<div class='begin-scroll'>
								<a href='lineup.php?group=group4' target='work'>开始滚动</a>
							</div>
							";
							}
							else{
								echo "
								<div class='complete'>已完成</div>
								<div class='rerock'>
									<a href='rerock.php?collection=group4result'>重新滚动</a>
								</div>
								";
							}
						}
					?>
				</li>
				<li>
					<?php
						if(empty($fetch5)){
							echo "
								<div>
									<div class='before'>
										<div class='title'>第五组</div>
										<form name='form5' method='post'>
											<input type='file' name='file5' class='fileload display-n'>
											<input type='submit' name='Submit5' class='real-submit5 display-n'>
										</form>
										<div class='file-btn'>上传文件</div>
									</div>
									<div class='after display-n'>
										<div class='title'>第五组</div>
										<div class='submit-btn Submit5'>提交数据</div>
									</div>
								</div>";
						}
						else{
							if(empty($refetch5)){
							echo "
							<form name='retry_form5' action='resubmit.php' method='post'>
								<input type='text' name='tablename' value='group5' style='display:none;'>
							</form>
							<div class='datastatus5'>重新导入</div>
							<div class='begin-scroll'>
								<a href='lineup.php?group=group5' target='work'>开始滚动</a>
							</div>
							";
							}
							else{
								echo "
								<div class='complete'>已完成</div>
								<div class='rerock'>
									<a href='rerock.php?collection=group5result'>重新滚动</a>
								</div>
								";
							}
						}
					?>
				</li>
			</ul>
			<ul class="ul-Sec display-n">
				<li>
					<div class="title">第一组</div>
					<div class="numstart">
						<a href="lottery.php?collection=group1result" target="work">摇号开始</a>
					</div>
				</li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
			</ul>
		</div>
		<div class="right">
			<iframe src="dolineup.php" name="work" class="iframe"></iframe>
		</div>
	</div>
	<?php
		if (isset($_POST['Submit1']))
		{
			$data->read($_POST['file1']);
			for ($i = 1; $i <= $data->sheets[0]['numRows']; $i++) 
		{
  			$insert1 = "INSERT INTO group1 VALUES('".$data->sheets[0]['cells'][$i][1]."')"; 
  		//echo "<script type='text/javascript'>alert($sql);</script>";
  			mysql_query($insert1);
  			echo "<script> location.replace('index.php'); </script>";
		}

		}

		if (isset($_POST['Submit2']))
		{
			$data->read($_POST['file2']);
			for ($i = 1; $i <= $data->sheets[0]['numRows']; $i++) 
		{
  			$insert2 = "INSERT INTO group2 VALUES('".$data->sheets[0]['cells'][$i][1]."')"; 
  		//echo "<script type='text/javascript'>alert($sql);</script>";
  			mysql_query($insert2);
  			echo "<script> location.replace('index.php'); </script>";
		}

		}

		if (isset($_POST['Submit3']))
		{
			$data->read($_POST['file3']);
			for ($i = 1; $i <= $data->sheets[0]['numRows']; $i++) 
		{
  			$insert3 = "INSERT INTO group3 VALUES('".$data->sheets[0]['cells'][$i][1]."')"; 
  		//echo "<script type='text/javascript'>alert($sql);</script>";
  			mysql_query($insert3);
  			echo "<script> location.replace('index.php'); </script>";
		}

		}

		if (isset($_POST['Submit4']))
		{
			$data->read($_POST['file4']);
			for ($i = 1; $i <= $data->sheets[0]['numRows']; $i++) 
		{
  			$insert4 = "INSERT INTO group4 VALUES('".$data->sheets[0]['cells'][$i][1]."')"; 
  		//echo "<script type='text/javascript'>alert($sql);</script>";
  			mysql_query($insert4);
  			echo "<script> location.replace('index.php'); </script>";
		}

		}

		if (isset($_POST['Submit5']))
		{
			$data->read($_POST['file5']);
			for ($i = 1; $i <= $data->sheets[0]['numRows']; $i++) 
		{
  			$insert5 = "INSERT INTO group5 VALUES('".$data->sheets[0]['cells'][$i][1]."')"; 
  		//echo "<script type='text/javascript'>alert($sql);</script>";
  			mysql_query($insert5);
  			echo "<script> location.replace('index.php'); </script>";
		}

		}
?>
	<script type="text/javascript" src="javascripts/jquery-2.0.3.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$(".tabcFir").click(function() {
				$(this).removeClass("border-n");
				$(".tabcSec").addClass("border-n");
				$(".ul-Fir").removeClass("display-n");
				$(".ul-Sec").addClass("display-n");
			});
			$(".tabcSec").click(function() {
				$(this).removeClass("border-n");
				$(".tabcFir").addClass("border-n");
				$(".ul-Sec").removeClass("display-n");
				$(".ul-Fir").addClass("display-n");
			});
			$(".file-btn").click(function() {
				$(this).prev().find("input[type=file]").click();
			});
			$(".fileload").on('change',function() {
				var parent = $(this).parent().parent().parent();
				parent.find(".before").addClass("display-n");
				parent.find(".after").removeClass("display-n");
			})


			$(".Submit1").click(function() {
				$(".real-submit1").click();
			});
			$(".datastatus1").click(function() {
				retry_form1.submit();
			});


			$(".Submit2").click(function() {
				$(".real-submit2").click();
			});
			$(".datastatus2").click(function() {
				retry_form2.submit();
			});


			$(".Submit3").click(function() {
				$(".real-submit3").click();
			});
			$(".datastatus3").click(function() {
				retry_form3.submit();
			});


			$(".Submit4").click(function() {
				$(".real-submit4").click();
			});
			$(".datastatus4").click(function() {
				retry_form4.submit();
			});


			$(".Submit5").click(function() {
				$(".real-submit5").click();
			});
			$(".datastatus5").click(function() {
				retry_form5.submit();
			});
		});
		
	</script>
</body>
</html>
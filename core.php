<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Document</title>
	<style type="text/css">          
        #scroll li{float:left;width:120px;} 
        #scroll2{display:none;} 
    </style>
</head>
<body>
<?php
	$conn= mysql_connect('localhost','root','') or die("Can not connect to database.");  
	mysql_query("set names 'utf8'");//设置编码输出
	mysql_select_db('resident'); //选择数据库
	$sql240 = "SELECT * FROM  `excel150` WHERE `post` =  '中层正高' && tip = '0' ORDER BY `id` desc  limit 1";
	$query = mysql_query($sql240);
?>
	<div> 
    <ul style="width:500px;height:20px;overflow:hidden;border:1px red solid;line-height:20px;" id="scroll"> 
        <?php
        	while($fetch = mysql_fetch_array($query)) {
        		echo "<li>";
        		echo $fetch["name"];
        		echo "</li>";
        		echo "<li>";
        		echo $fetch["department"];
        		echo "</li>";
        		echo "<li>";
        		echo $fetch["post"];
        		echo "</li>";
        		echo "<li>";
        		echo $fetch["area"];
        		echo "</li>";

        	}
        ?> 
    </ul> 
    <ul id="scroll2"></div> 
</div> 
<script type="text/javascript"> 
    var scrollDelay=1;//数字越大速度越慢 
    var Scroll=document.getElementById("scroll"); 
    var Scroll2=document.getElementById("scroll2"); 
    var currentTop=0,preTop=0,stoptime=0,stopscroll=false; 
    var ScrollChild=Scroll.getElementsByTagName("li"); 
    var ScrollHeight=Scroll.offsetHeight; 
    function ScrollInfo(){ 
        if(stopscroll==true) return; 
        currentTop++; 
        if(currentTop+1>=ScrollHeight){ 
            currentTop--; 
            stoptime++; 
            if(stoptime==parseInt(ScrollHeight)*scrollDelay) { 
currentTop=0; 
stoptime=0; 
    } 
        }else{ 
            preTop=Scroll.scrollTop; 
            Scroll.scrollTop++; 
            if(preTop==Scroll.scrollTop){ 
     Scroll.scrollTop=Scroll2.offsetHeight-ScrollHeight; 
     Scroll.scrollTop+=1; 
     } 
        } 
    } 
    function Int_Scroll(){ 
        Scroll2.innerHTML=""; 
        Scroll2.innerHTML=Scroll.innerHTML; 
        Scroll.innerHTML=Scroll2.innerHTML+Scroll2.innerHTML; 
        Scroll.onmouseover=function(){ 
            stopscroll=true; 
        } 
        Scroll.onmouseout=function(){ 
            stopscroll=false; 
        } 
        setInterval("ScrollInfo()",scrollDelay); 
    } 
    window.setTimeout("Int_Scroll()",1000); 
</script> 
</body> 
</html>
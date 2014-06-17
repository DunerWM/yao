<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style type="text/css">
        #div_random
        {
            height: 60px;
        	font-family: 方正姚体; 
        	font-size: 40px; 
        	font-weight: 900; 
        	font-style: inherit; 
        	font-variant: normal; 
        	color: #0099FF; 
        	background-color: #333; 
        	text-align: center;
        }
        .result_div{
        	height: 540px;
        	overflow: auto;
        	background-color: #999;
        }
        ul{
        	list-style: none;
        }
        *{margin: 0;padding: 0;}
        li{
        	padding: 5px;
        	background-color: #FCC105;
        	width: 100px;
        	float: left;
        	font-size: 20px;
        	color: #000;
        	margin: 5px;
        }
    </style>
</head>
<body>
	<?php
		$group =  $_GET['collection'];
	?>
	<?php
	$conn= mysql_connect('localhost','root','') or die("Can not connect to database.");  
	mysql_query("set names 'utf8'");//设置编码输出
	mysql_select_db('groups'); //选择数据库
	$sql = "SELECT * FROM  `".$group."`";
	$query = mysql_query($sql);
	$array = array();
	$point = ",";
	while($fetch = mysql_fetch_array($query)){
		//array_push($array,$fetch["id"]);
        array_push($array,$fetch["name"]);
        array_push($array,$point);
	}	
?>
<div class="operations">
    <div>前一位</div>
    <div>后一位</div>
</div>
<form id="form1">
    <div id="div_random">00</div>
    <input type="text" 
                 <?php 
                 echo"value=\"";
                 for($i=0;$i<count($array);$i++){
                echo $array[$i];
            }
                 echo "\"";
                 ?> id="array_number" style="display:none;" />
    <div class="result_div"onscroll="OnloadForScroll()">
        <ul id="result"> 
        </ul>
    </div>
</form>
<form name="form_none" id="form_none" action="result.php" style="display:none;" method="post">
    <input type="text" 
                 <?php 
                 echo"value=\"";
                 echo $group;
                 echo "\"";
                 ?> name="excel_title" style="display:none;" />
</form>
<button id="submit" style="display:none; height:30px; width:100%; margin-top:5px; color:#0099FF; font-size:16px; font-weight:bold;">确认并提交</button>

<script type="text/javascript">
    var int;
    var speed=10;
    var array_number = document.getElementById('array_number').value;
    var arrays = array_number.split(",");
    arrays.pop();
    function random() {
        var randomNum = arrays.length;
        var num = Math.random();
        num = Math.ceil(num * randomNum)-1;
        id_num = arrays[num];
        document.getElementById("div_random").innerHTML = id_num;
        return num;
    }
    var j=0;
document.onkeydown=function(event){
    var e = event || window.event || arguments.callee.caller.arguments[0];
    if(e && e.keyCode==13){
         int = setInterval(random, speed);
       }            
     if(e && e.keyCode==32){
        j++;
        clearInterval(int);
        var num = random();
        var oNewNode = document.createElement("LI");
        result.appendChild(oNewNode);
        oNewNode.innerText= j+" "+arrays[num];
        oNewNode.scrollIntoView(); 
        var NewIput= document.createElement("input");
        var arrays_data = arrays[num].toString();
        form_none.appendChild(NewIput);
        NewIput.name="inputname"+j;
        NewIput.value=arrays[num];
        arrays.splice(num,1);
        if (!arrays.length) {
            document.getElementById('submit').style.display='block';
        }
    }
}
document.getElementById('submit').onclick=function(){
    form_none.submit();
} 
</script>
</body>
</html>
<html>
	<style>
		.photo1{
			float: left;		
		}
		body{
			margin:0px;
		}
		.d0{
			text-align:right;
			padding-right:40px;
			padding-top:10px;
			padding-bottom:17px;			
			background-color:#86c2db;
		}
		.d1{
			font-size:25px;
			font-family:微軟正黑體;
			color:#FFFFFF;
			display:inline;
			border:0px solid #231259;
			padding-right:10px;
			margin-left:50px;
			font-weight:bold;
		}
		.d2{
			font-size:50px;
			color:#86c2db;
			text-align:center;
		}
		.d3{
			text-align:center;
			margin-left:38%;
			width:20%;
			font-size:50px;
			font-weight:bold;
			padding:30px;
			color:#86c2db;
		}
		td{
			text-align:left;		  
		  }
		.d4{
			padding:50px;		
		}
		.c1{
			padding:20px;		
		}
		.d7{
			background-color:#86c2db;
			height:100px;
			line-height:25px;
			border-top-style:1px solid #FFFFFF;
			font-size:15px;
			color:#FFFFFF;
			text-align:center;
			font-family:Microsoft JhengHei;	
			margin-top:40px;
			padding-top:20px;
			width:100%;
		}
		.img{
			width:300px;
			height:200px;
			padding-top:10px;
			padding-left:20px;
			padding-right:20px;
		}
		.td1{			
			font-size:18px;
			padding-top:5px;
			padding-left:15px;
			padding-bottom:20px;
			font-family:Microsoft JhengHei;	
			color:#575656;
		}	
		.td2{			
			font-size:15px;
			padding-top:5px;
			padding-left:10px;
			font-family:Microsoft JhengHei;	
			color:#cc4112;
		}
		.td3{
			width:25%;
			text-align:justify;
			vertical-align:top;
			font-size:10px;
			padding-top:15px;
			padding-left:30px;
			padding-right:30px;
			padding-bottom:100px;
			line-height:24px;		
		}					
		.t2{
			border-bottom:1px solid pink;
			text-align:left;
		}			
		.t3{
			border:0px solid pink;
			text-align:right;
		}		
		.c2{
			font-size:40px;
			text-align:center;
			font-family:微軟正黑體;
			padding-top:40px;
			padding-bottom:40px;
			color:#86c2db;
		}
		.con{
			text-align:center;
			font-size:25px;
			font-family:微軟正黑體;
			color:#86c2db;
        }
		.select{
			width:170px;
			height:25px;
			font-size:15px;
			font-family:微軟正黑體;
		}		
		.login{
			color:gray;
			font-size:15px;
		}
		#site-header {
			position:sticky;
			top:0;
		}		
	</style>

	<head>
		<title>勝興365 互動體驗</title>
	</head>

	<body>
		<div class='d0' id='site-header'>
			<a href="ss365.php" title="前往首頁"><img class='photo1' src='img/logo.png' width=160px height=80px><a>
			<ul>			
				<li class='d1'><a href="Introduction.php" style="text-decoration:none; color:#FFF;">勝興簡介</a></li>				
				<li class='d1'><a href="Interactive Experience.php" style="text-decoration:none; color:#FFF;">互動體驗</a></li>				
				<li class='d1'><a href="Shop365.php" style="text-decoration:none; color:#FFF;">商品介紹</a></li>				
				<li class='d1'><a href="login or register.php" style="text-decoration:none; color:#FFF;">會員中心</a></li>				
				<li class='d1'><a href="traffic.php" style="text-decoration:none; color:#FFF;">交通資訊</a></li>
			</ul>
		</div>
		
		<div class='d2'>
			<img src='img/365.jpg' width=100%>
		</div>
		
		<div class='d3'>
			互動體驗課程		
		</div>
		
		<?php		
		$pi1=['IE_img and txt/IE_p1.jfif','IE_img and txt/IE_p2.jfif','IE_img and txt/IE_p3.jpg','IE_img and txt/IE_p4.jfif'];
		$name1=['【手工皂DIY】','【陶土DIY】','【木作DIY】','【多肉組盆DIY】'];
		$price1=['NT$120','NT$150','NT$100','NT$200'];
		$file1=['t1.txt','t2.txt','t3.txt','t4.txt'];
		$pi2=['IE_img and txt/IE_p5.jpg','IE_img and txt/IE_p6.jpg','IE_img and txt/IE_p7.jpg','IE_img and txt/IE_p8.jpg'];
		$name2=['【擴香瓶吊飾DIY】','【金工體驗，手作戒指！】','【輕芳療調香體驗】','【DIY手繪燙金紅包袋】'];
		$price2=['NT$250','NT$250','NT$250','NT$200'];
		$file2=['t5.txt','t6.txt','t7.txt','t8.txt'];
		
		echo"<center>";
		echo"<table>";
		for($i=0;$i<=3; $i++){
			echo"<td class=''>";
			echo"<img src='" .$pi1[$i]."' class='img'>";
			echo"</td>";
		}
		echo"<tr class='td1'>";
		for($i=0;$i<=3; $i++){
			echo"<td class='td1'>";
			echo $name1[$i];
			echo"<br>";
			echo "<div class='td2'>".$price1[$i];
			echo"</td>";
		}	
		echo"<tr class='td1'>";
		for($i=0;$i<=3; $i++){
			echo"<td class=''>";
			echo"<img src='" .$pi2[$i]."' class='img'>";
			echo"</td>";
		}
		echo"<tr class='td1'>";
		for($i=0;$i<=3; $i++){
			echo"<td class='td1'>";
			echo $name2[$i];
			echo"<br>";
			echo "<div class='td2'>".$price2[$i];
			echo"</td>";
		}
		echo"</table>";
		echo"</center>";
		?>
		
		<div class="c2">線上報名DIY課程</div>
		
		<div class ='con'>
			<form name="f1" action="Interactive Experience_res">		 
				<div class ='row'>
					姓名：<input type="text" name="cname"> 
				</div>
				<div class ='row'>
					電話：<input type="text" name="phone"> 
				</div>
				<div class ='row'>
					人數：<input type="text" name="people"> 
				</div>
				<div class ='row'>課程：<select name="diy" class='select'>
						<option>請選擇</option>
						<option value='1'>01/13(六)手工皂</option>
						<option value='2'>01/14(日)陶土</option>
						<option value='3'>01/20(六)木作</option>
						<option value='4'>01/21(日)多肉組盆</option>
						<option value='5'>01/27(六)擴香瓶吊飾</option>
						<option value='6'>01/28(日)手作戒指</option>
						<option value='7'>02/03(六)輕芳療調香體驗</option>
						<option value='8'>02/04(日)手繪燙金紅包袋</option>
					</select>
				</div> 
			</form> 
			<div class ='login'>報名課程前請先
				<a href="login.php">登入</a>
			</div>
		</div>	
		<br><br>
		<div  class='d7'> 
			勝興365-青年創業基地
			<br>地址：367苗栗縣三義鄉36-5號
			<br>電話：0983-902-888
		</div>		
	</body>
</html>


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
		#site-header {
			position:sticky;
			top:0;
		}
		.pic1{
			font-size:50px;
			color:#86c2db;
			text-align:center;
		}
		.a1{			
			padding-right:25px;		
			display:inline;
			text-align:center;
		}
		table{
			margin-top:30px;
		}
		.c2{
		text-align:center;
		font-size:30px;
		color:pink;
		}
		.inp{
			border-radius:30px;
			background-color:pink; 
			border:0px; 
			font-size:20px;
			font-family:微軟正黑體;
			font-weight:bold;
			color:#FFF;
			padding:10px;
			padding-left:30px;
			padding-right:30px;
			margin-right:10px;
			margin-left:10px;
		}		
	</style>

	<head>
		<title>勝興365 互動體驗</title>
	</head>
	
	
	<body>
		<div class='d0' id='site-header'>
		<a href="ss365.php" title="前往首頁"><img class='photo1' src='img/logo.png' width=160px height=80px><a>
			<ul >
				<li class='d1'><a href="Introduction_2.php" style="text-decoration:none; color:#FFF;">勝興簡介</a></li>
				
				<li class='d1'><a href="DIY365.php" style="text-decoration:none; color:#FFF;">互動體驗</a></li>
				
				<li class='d1'><a href="Shop365_2.php" style="text-decoration:none; color:#FFF;">商品介紹</a></li>
				
				<li class='d1'><a href="MemberCentre.php" style="text-decoration:none; color:#FFF;">會員中心</a></li>
				
				<li class='d1'><a href="traffic_2.php" style="text-decoration:none; color:#FFF;">交通資訊</a></li>
			</ul>
		</div>
						
		<div class='pic1'>	
			
			<div class='pic2'  style= "position:relative ">
				
				<div style= "position:absolute;left:560; top:160; color:#000; font-weight:bold ">
				 <h1>會員中心</h1>
				</div>
				<img src='img/Bshop.jpg' style='opacity:0.5;' width=100% >
			</div>						
		</div>
			
		<center>	
		<table >
		<td >
			<ul type=none>
				<li class='a1'><a href='MemberCentre.php' style="text-decoration:none; color:gray;" >會員資料</a></li>
				
				<li  class='a1'><a href='OrderInformation.php' style="text-decoration:none; color:gray;">歷史訂單</a></li>
		
				<li class='a1'><a href='Feedback.php' style="text-decoration:none; color:gray;" >回饋建議</a></li>
				
				<li class='a1'><a href='login or register.php' style="text-decoration:none; color:gray;" >登出</a></li>
			</ul>
			<hr>
		</td>
		</tr>
		<td>
			<div class="c2">回饋建議</div>
			<br>
			<div class ='con'>
				<form name="f1" action="Interactive Experience2_res">		 
					<div class ='row'>
						暱稱：<input type="text" name="cname">
					</div><br>
					<div class ='row'>
						<textarea name = 'cmsg' rows = 10 cols = 50>請留下訊息</textarea>
					</div>
					<br>
					<input type="submit" value="確認">
					<input type="reset" value="取消"> 		 
				</form> 
			</div>		
		</td>

		</table>
		</center>		
		<br>		
		<center>
			<div>
				<a href='msg.php' style="text-decoration:none;" class = 'inp' >查看其他評論</a>
			</div>
		</center>
				
		<div  class='d7'> 
			勝興365-青年創業基地
			<br>地址：367苗栗縣三義鄉36-5號
			<br>電話：0983-902-888
		</div>	
	</body>	
</html>

<html>
	<style>
		input{
			margin:20px;
			background-color:#FFF;
			border:5px solid #86c2db;
			font-size:100px;
			color:#86c2db;
			font-family:微軟正黑體;
        }
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
		
		<div class='pic1' style= "position:relative ">	
			<div style= "position:absolute; top:50%; left:50%; transform:translate(-50%, -50%);color:#000; font-weight:bold">
				<h1>會員中心</h1>
			</div>
			<img src='img/Bshop.jpg' style='opacity:0.5;' width=100% >			
		</div>
		
		<br><br>
		
		<center>
			<input type="button" value="註冊" onclick="location.href='register.php'">
			<input type="button" value="登入" onclick="location.href='login.php' ">
		</center>
		
		<div  class='d7'> 
			勝興365-青年創業基地
			<br>地址：367苗栗縣三義鄉36-5號
			<br>電話：0983-902-888
		</div>	
	</body>
</html>

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
		.t1{
			font-size:16px;
			color:gray;
			line-height:30px;
		}
		#site-header {
			position:sticky;
			top:0;
		}
		
		.slider_container {
			margin: 30px auto;
			width: 400px;
			height: 280px;
			position: relative;
			border: 20px solid;    
			border-color: #fff;
			border-bottom-width: 100px;
			background-color: #f5f5f5;
			box-shadow: #666 0 0 5px;
		}
		.slider_container div {
			position: absolute;
			top: 0;
			left: 0;
			opacity: 0;
			filter: alpha(opacity=0);
		}
		.slider_container div {
			-webkit-animation: round 25s linear infinite;
					animation: round 25s linear infinite;
		}

		@-webkit-keyframes round {
			4% {
				opacity: 1;
				filter: alpha(opacity=100);
				/* 0 - 1秒 淡入*/
			}
			20% {
				opacity: 1;
				filter: alpha(opacity=100);
				/* 1- 5秒靜止*/
			}
			24% {
				opacity: 0;
				filter: alpha(opacity=0);
				/* 5-6秒淡出*/
			}
		}
		@keyframes round {
			4% {
				opacity: 1;
				filter: alpha(opacity=100);
				/* 0 - 1秒 淡入*/
			}
			20% {
				opacity: 1;
				filter: alpha(opacity=100);
				/* 1- 5秒靜止*/
			}
			24% {
				opacity: 0;
				filter: alpha(opacity=0);
				/* 5-6秒淡出*/
			}
		}
		.slider_container div:nth-child(5) {
			-webkit-animation-delay: 0s;
					animation-delay: 0s;
		}

		.slider_container div:nth-child(4) {
			-webkit-animation-delay: 5s;
					animation-delay: 5s;
		}

		.slider_container div:nth-child(3) {
			-webkit-animation-delay: 10s;
					animation-delay: 10s;
		}

		.slider_container div:nth-child(2) {
			-webkit-animation-delay: 15s;
					animation-delay: 15s;
		}

		.slider_container div:nth-child(1) {
			-webkit-animation-delay: 20s;
					animation-delay: 20s;
		}
		.slider_container span {    
			color: #000;
			background: #fff;
			position: absolute;
			left: 0%;
			top: 280px;
			width: 400px;
			height: 100px;
			font-size: 30px;
			text-align: center;
			line-height: 100px;
			-webkit-transform:scaleY(0);
			-ms-transform:scaleY(0);
			transform:scaleY(0);
			-webkit-transition: all 0.5s ease-in-out;
			transition: all 0.5s ease-in-out;
		}
		.slider_container:hover span {
			width: 100%;
			-webkit-transform:scaleY(1);
			-ms-transform:scaleY(1);
			transform:scaleY(1);
		}
	</style>

	<head>
		<title>勝興365 互動體驗</title>
	</head>
	
	<body>
		<div class='d0' id='site-header'>
		<a href="ss365_2.php" title="前往首頁"><img class='photo1' src='img/logo.png' width=160px height=80px><a>
			<ul>
				<li class='d1'><a href="Introduction_2.php" style="text-decoration:none; color:#FFF;">勝興簡介</a></li>				
				<li class='d1'><a href="DIY365.php" style="text-decoration:none; color:#FFF;">互動體驗</a></li>				
				<li class='d1'><a href="Shop365_2.php" style="text-decoration:none; color:#FFF;">商品介紹</a></li>				
				<li class='d1'><a href="MemberCentre.php" style="text-decoration:none; color:#FFF;">會員中心</a></li>				
				<li class='d1'><a href="traffic_2.php" style="text-decoration:none; color:#FFF;">交通資訊</a></li>
			</ul>
		</div>
		
		<div class='d2'>
			<img src='img/365.jpg' width=100% >	
		<div class='d3'>勝興簡介</div>
		
		<div class='t1'>
			苗栗著名的觀光景點勝興車站，除了有熱鬧老街、<br>
			眾多美食之外，還有一處新的景點-勝興365青年創業基地，<br>
			是多位返鄉青年創意手作的夢想基地。<br><br>
			如果夢想有形狀，那就是勝興365的樣子<br>
			我們是一群回到家郷找尋機會的青年<br><br>
			<hr width=500>
		</div>

		<div class="slider_container">
			<div>
				<img src="img/i_01.jpg" style='width:400px; height: 280px;' alt="pure css3 slider" />
				<span class="info">周邊景點</span>
			</div>
			<div>
				<img src="img/i_02.jpg" style='width:400px; height: 280px;' alt="pure css3 slider" />
				<span class="info">多肉盆栽DIY</span>
			</div>
			<div>
				<img src="img/i_03.jpg" style='width:400px; height: 280px;' alt="pure css3 slider" />
				<span class="info">展區擺設區域</span>
			</div>
			<div>
				<img src="img/i_04.jpg" style='width:400px; height: 280px;' alt="pure css3 slider" />
				<span class="info">戶外小池塘</span>
			</div>
			<div>
				<img src="img/i_05.jpg" style='width:400px; height: 280px;' alt="pure css3 slider" />
				<span class="info">勝興365-青年創業基地365</span>
			</div>
		</div>
			
		<div  class='d7'> 
			勝興365-青年創業基地
			<br>地址：367苗栗縣三義鄉36-5號
			<br>電話：0983-902-888
		</div>	
	</body>
</html>

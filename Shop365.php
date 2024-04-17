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
		.pic1{
			font-size:50px;
			color:#86c2db;
			text-align:center;
		}
		.d2{
			background-color:#FFFFFF;
			font-size:50px;
			color:#86c2db;
			padding:30px;
			text-align:center;
			height:150px;
		}
		.d3{
			text-align:center;
			//border:1px solid black;
			margin-left:38%;
			width:20%;
			font-size:50px;
			font-weight:bold;
			padding:30px;
			color:#86c2db;
		}
		td{
			text-align:center;		  
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
		}
		.td1{
			text-align:center;
			font-size:20px;
			padding-top:20px;
		}	
		.td2{
			width:25%;
			text-align:justify;
			vertical-align:top;
			font-size:10px;
			padding-top:15px;
			padding-left:30px;
			padding-right:30px;
			line-height:24px;
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
		.header{			
			position:fixed;
			top:0;		
		}
		.imge{
			font-size: 32px;
			color: white;
			position:absolute;
			top:250px;
			left:10px;
		}
		#site-header {
			position:sticky;
			top:0;
		}
	</style>

	<head>
		<title>勝興365 商品介紹</title>
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
		
		<div class='pic1'>				
			<div class='pic2'  style= "position:relative   display: inline-block;">			
				<div style= "position:absolute; top:50%; left:50%; transform:translate(-50%, -50%);color:#000; font-weight:bold">
					<h1>商品介紹</h1>
				</div>
				<img src='img/Bshop.jpg' style='opacity:0.5;' width=100% >
			</div>						
		</div>
		
		<div class='d2'>想不到要買什麼...就刷新一下
			<br>			
			<script>
				var award=['小農產品','手工零錢包','星空棒棒糖','水尼盆器','甜點','手工原木筆','客製化手工書','銀飾'];
				var ind=Math.floor(Math.random()*5);
				document.write(award[ind]);
			</script>	
		</div>	
		<br><br>	

		<?php		
		$pi1=['shop_img and txt/p1.jpg','shop_img and txt/p2.jpg','shop_img and txt/p3.jpg','shop_img and txt/p4.jpg'];
		$name1=['【樂仙米農】－小農產品','【星馨手做】－手工零錢包','【玉膳屋】－星空棒棒糖','【水の尼】－水尼盆器'];
		$file1=['shop_img and txt/t1.txt','shop_img and txt/t2.txt','shop_img and txt/t3.txt','shop_img and txt/t4.txt'];
		$pi2=['shop_img and txt/p5.jpg','shop_img and txt/p6.jpg','shop_img and txt/p7.jpg','shop_img and txt/p8.jpg'];
		$name2=['【BONBONS】－甜點','【皇手製作】－手工原木筆','【來本冊子】－客製化手工書','【Zo.craft 鑿工藝】－銀飾'];
		$file2=['shop_img and txt/t5.txt','shop_img and txt/t6.txt','shop_img and txt/t7.txt','shop_img and txt/t8.txt'];
		
		echo"<table>";
		for($i=0;$i<=3; $i++){
			echo"<td class='td1'>";
			echo"<img src='" .$pi1[$i]."' class='img'>";
			echo"</td>";
		}
		echo"<tr class='td1'>";
		for($i=0;$i<=3; $i++){
			echo"<td class='td1'>";
			echo $name1[$i];
			echo"</td>";
		}
		echo"<tr class='td1'>";
		for($i=1;$i<=4; $i++){
			echo"<td class='td2'>";
			require_once ($file1[($i-1)]);
			echo"</td>";
		}
		echo"<tr class='td1'>";
		for($i=0;$i<=3; $i++){
			echo"<td class='td1'>";
			echo"<img src='" .$pi2[$i]."' class='img'>";
			echo"</td>";
		}
		echo"<tr class='td1'>";
		for($i=0;$i<=3; $i++){
			echo"<td class='td1'>";
			echo $name2[$i];
			echo"</td>";
		}
		echo"<tr class='td1'>";
		for($i=1;$i<=4; $i++){
			echo"<td class='td3'>";
			require_once ($file2[($i-1)]);
			echo"</td>";
		}
		echo"</table>";
		?>

		<table>
		<?php	
			$file3 = ['shop_img and txt/t9.txt','shop_img and txt/t10.txt','shop_img and txt/t11.txt'];
			for ($i=1 ; $i<=3 ; $i=$i+1 ) {
				echo "<tr>";
				echo "<td class='t2'>";
				require_once ($file3[($i-1)]);
				echo "</td>";
			}
		?>
		</table>		
		<div  class='d7'> 
			勝興365-青年創業基地
			<br>地址：367苗栗縣三義鄉36-5號
			<br>電話：0983-902-888
		</div>
	</body>
</html>
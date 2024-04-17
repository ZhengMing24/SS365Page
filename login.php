<html>
	<style>
		body{
			margin:0px;
		}
		.background{
			background-color:pink;
			width:100%;
			height:100%;
			display: flex;
			justify-content: center;
			align-items: center; 
		}
		.t1{
			border:5px solid pink;
			padding:30px;
			margin-left:auto; 
			margin-right:auto;
			margin-top:170px;
			background:#FFF;			
		}
		.b1{
			text-align:center;
			font-size:30px;
			font-family:微軟正黑體;
			color:gray;
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
		.log{
			height:40px;
			background-color:#ebebeb;
			border:0px;			
		}	
	</style>

	<body>
		<table class = 't1'>
			<td>
				<div class = 'b1'>
					<a href="login or register.php" style="text-decoration:none; color:gray;">勝興365</a><br>
					登入會員
				</div>			
				<br><br><center>
				<form action = 'login_res.php ' 'MemberCentre.php' method = 'post'>
					<input type = 'text' name='id' size = 30 placeholder='帳號' class='log'>
					<br><br>
					<input type = 'password' name='pwd'  size = 30 placeholder='密碼'  class='log'>
					<br><br><br>				
					<input type = 'submit' value = '登入' class='inp' >			
				</form></center>
				<br>
				<center style="color:gray; font-size:15px;">尚未有勝興365會員 請點選<a href="register.php">註冊</a></center>
			</td>
		</table>
	</body>
</html>
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
	</style>

	<body>
		<div class = 'background' >
			<table class = 't1'>
				<td>
					<div class = 'b1'>
						<a href="login or register.php" style="text-decoration:none; color:gray;">勝興365</a><br>
						註冊會員
					</div>
					
					<br><br>
					<form action = 'register_res.php' method = 'post'>
						姓名：<input type = 'text' name='cname' size = 25 required>
						<br><br>
						性別：<input  type="radio" name="sex" value="1" required>生理男
						<input  type="radio" name="sex" value="2">生理女
						<br><br>
						帳號：<input type = 'text' name='id' size = 25 required>
						<br><br>
						密碼：<input type = 'password' name='pwd' size = 25 required>
						<br><br>
						信箱：<input type = 'email' name = 'cemail' size = 25  required>
						<br><br>
						生日：<input type = 'date' name='cdate'  min='1969-01-01' max='2025-12-31' value='2018-07-22' size = 25 required>
						<br><br>
						手機號碼：<input type='tel'  name='phone'   placeholder='0912345678' required>
						<br><br>
						<center>
						<input type = 'submit' value = '送出' class='inp' >
						<input type = 'reset' value = '取消' class='inp'></center>
					
					</form>
					<center style="color:gray; font-size:15px;">已有會員 請點選<a href="login.php">登入</a></center>
				</td>
			</table>
		</div>
	</body>
</html>
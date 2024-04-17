<html>
	<?php
		date_default_timezone_set("Asia/Taipei");
		$cname = $_POST['cname'];
		$sex = 	$_POST['sex'];
		$id = $_POST['id'];
		$pwd = $_POST['pwd'];
		$cemail = $_POST['cemail'];
		$cdate = $_POST['cdate'];
		$phone = $_POST['phone'];
		$now  = date('Y-m-d H:i:s', time()  );
		$con = mysqli_connect('127.0.0.1','root','');
		mysqli_select_db($con,'ss365')or die(mysqli_error($con));
		
		$sql = "INSERT INTO `register` (`reg_no`, `reg_name`, `reg_sex`, `reg_id`, `reg_pwd`, `reg_mail`, `reg_date`, `reg_phone`, `reg_time`) VALUES (NULL, '$cname', '$sex', '$id', '$pwd', '$cemail', '$cdate', '$phone', '$now')";

		mysqli_query($con,$sql)or die(mysqli_error($con));
		echo "註冊成功";
		header("refresh:2; url=login.php");
	?>
</html>


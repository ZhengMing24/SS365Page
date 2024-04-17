<html>
    <style>
        .row{
            font-size:22px;
            font-family:王漢宗顏楷體繁;
            padding: auto;
        }
    </style>
	
	<?php
	date_default_timezone_set("Asia/Taipei");
	$cname = $_GET['cname'];
	$cmsg = $_GET['cmsg'];
	$now  = date('Y-m-d H:i:s', time()  );
	
	$con = mysqli_connect('127.0.0.1','root','');
	mysqli_select_db($con,'ss365')or die(mysqli_error($con));
	
	$sql = "INSERT INTO `messageboard` (`mes_no`, `mes_name`, `mes_mes`, `mes_date`) VALUES (NULL, '$cname', '$cmsg', '$now')";
	
	mysqli_query($con,$sql)or die(mysqli_error($con));
	header("refresh:0; url=msg.php");
	?>
</html>

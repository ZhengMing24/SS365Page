<?php
	$id = $_POST['id'];
	$pwd = $_POST['pwd'];

	$con = mysqli_connect('127.0.0.1','root','');
	mysqli_select_db($con,'ss365') or die(mysqli_error($con));

	$sql = " SELECT * FROM register WHERE reg_id = '$id' AND reg_pwd = '$pwd' ";

	$box = mysqli_query($con,$sql)or die(mysqli_error($con));
	$count = 0;
	while($record = mysqli_fetch_assoc($box)){
		$count = $count + 1;
		$reg_no=$record["reg_no"];
        $reg_name=$record["reg_name"];
		$reg_sex=$record["reg_sex"];
        $reg_id=$record["reg_id"];
        $reg_pwd=$record["reg_pwd"];
		$reg_mail=$record["reg_mail"];	
		$reg_phone=$record["reg_phone"];
        $reg_date=$record["reg_date"];
		$reg_time=$record["reg_time"];
		/*print_r($record);*/
	}
	switch($reg_sex)
	{
		case '1':
			$reg_sex="男";
			break;
		case '2':
			$reg_sex="女";
			break;
	}
	if($count == 0){
		echo "查無此人";
		header("refresh:1; url=login.php");
	}else{
		echo "歡迎光臨";
		echo"<table style='border:1px solid black'>";
		echo"<tr>";
		echo"<td>"."會員編號:".$reg_no."</td>";
		echo"<tr>";
		echo"<td>"."姓名:".$reg_name."</td>";
		echo"<tr>";
		echo"<td>"."性別:". $reg_sex."</td>";
		echo"<tr>";
		echo "<td>"."帳號:".$reg_id."</td>";
		echo"<tr>";
		echo "<td>"."密碼:".$reg_pwd."</td>";
		echo"<tr>";
		echo"<td>"."信箱:".$reg_mail."</td>";
		echo"<tr>";
		echo"<td>"."電話:".$reg_phone."</td>";
		echo"<tr>";
		echo"<td>"."生日:".$reg_date."</td>";
		echo"<tr>";
		echo"<td>"."時間:".$reg_time."</td>";
		echo"</table>"."<br>";
		/*header("refresh:2; url=DIY365.php");*/
		echo"請記好會員編號與密碼!!!!!!!!"."<br>"."<br>";
		echo "<font color = 'gray' size=2><a href='MemberCentre.php'>回到會員資料</a>";
	}
?>

  

	


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
        echo "<div class ='row'>";
        $cname = $_GET["cname"];
        $phone=$_GET["phone"];
        $people=$_GET["people"];
        $diy=$_GET["diy"];
		$now  = date('Y-m-d H:i:s', time()  );
		
        $con = mysqli_connect('localhost','root','');
        mysqli_select_db($con,'ss365') or die(mysqli_error($con));
        $sql="INSERT INTO `commodity` (`com_no`, `com_name`, `com_phone`, `com_people`, `com_class`, `com_time`) VALUES (NULL, '$cname', '$phone', '$people', '$diy', '$now')";
        mysqli_query($con,$sql) or die(mysqli_error($con));
		/*header("refresh:0; url=DIY.php");*/
		
		
		$sql="SELECT * FROM commodity WHERE com_name = '$cname' AND com_phone = '$phone' and com_people = '$people' and com_class = '$diy'";
		$box = mysqli_query($con,$sql)or die(mysqli_error($con));
		while($record=mysqli_fetch_assoc($box)){
		echo"<table style='border:1px solid black'>";
        echo "完成報名!!!";
        echo "<tr>";
		$com_no=$record["com_no"];
        echo "<td>"."訂單編號:".$com_no."</td>";
        echo "<tr>";
        $com_name=$record["com_name"];
        echo "<td>"."姓名:".$com_name."</td>";
		echo "<tr>";
        $com_phone=$record["com_phone"];
        echo "<td>"."電話:".$com_phone."</td>";
		echo "<tr>";
        $com_people=$record["com_people"];
        echo "<td>"."人數:".$com_people."</td>";
		echo "<tr>";
        $com_class=$record["com_class"];
        echo "<td>"."課程:".$com_class."</td>";	
		echo"</table>";
		}
		
       
    ?>
	<a href="MemberCentre.php">回到會員資料</a>
    <a href="OrderInformation.php">查詢歷史訂單</a>
   
    
	
	

    
</html>

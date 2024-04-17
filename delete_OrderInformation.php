<?php    
	$con = mysqli_connect('127.0.0.1','root',''); 
	mysqli_select_db($con, 'ss365'); 
   
    $com_no = $_GET['com_no']; 
    $sql =  "delete from commodity where com_no='$com_no' ";
	mysqli_query($con ,  $sql);
    
    header("refresh:0; url=ded.php"); 
?>
<style>
	th{
		background:black;
		color:white;
	}
	td{
		border-bottom:1px solid blue;
	}
	table{
		border:1px solid #black;
		font-size:20px;
		width:50%
	}

</style>

<body>
	<?php
		require_once("menu.php");
	?>
	<br><br><br>
	<table>
		<th>No</th><th>暱稱</th><th>內容</th><th>評論時間</th>
		<?php   
			$con = mysqli_connect('127.0.0.1','root',''); 
			mysqli_select_db($con, 'ss365'); 
		
			$sql =  "select * from messageboard";
			$box = mysqli_query($con ,  $sql);
			
			while ($record = mysqli_fetch_assoc($box)){	
				//print_r($record);		
				echo "<tr>";		
				echo "<td>";
				echo "<br>";
				$no=$record["mes_no"];
				echo $no;
				echo "</td>";

				echo "<td>";
				echo "<br>";
				$name=$record["mes_name"];
				echo $name;
				echo "</td>";
				
				echo "<td>";
				echo "<br>";
				$mes=$record["mes_mes"];
				echo $mes;
				echo "</td>";
				
				echo "<td>";
				echo "<br>";
				$date=$record["mes_date"];
				echo $date;
				echo "</td>";
			} 
		?>
	</table>
</body>
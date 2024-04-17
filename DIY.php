<style>
    td{
        border-bottom:2px solid blue;
    }
    th{
        background:#333;
        color:white;
    }
    table{
        width:50%;
        font-size:20px;
    }
</style>

<?php
	require_once("menu.php");
?>
<table>
    <th>No</th>
    <th>姓名</th>
    <th>電話</th>
    <th>人數</th>
    <th>課程</th>
    <?php
        $con= mysqli_connect('localhost','root','');
        mysqli_select_db($con,'ss365');
        $sql="SELECT * FROM commodity";
        $box=mysqli_query($con,$sql);
        while($record=mysqli_fetch_assoc($box))
        {
            echo "<tr>";
            $no=$record["com_no"];
            echo "<td>".$no."</td>";
            
            $name=$record["com_name"];
            echo "<td>".$name."</td>";

            $phone=$record["com_phone"];
            echo "<td>".$phone."</td>";

            $people=$record["com_people"];
            echo "<td>".$people."</td>";

            $class=$record["com_class"];
            echo "<td>".$class."</td>";
            
        }
            
    ?>
</table>
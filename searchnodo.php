<?php
header("Content-type: text/html; charset=UTF-8"); 
    $studentno = $_GET['studentno'];
	require_once 'conn.php';
	$sql='select * from score where studentId="'.$studentno.'"';
	$r=mysql_query($sql);
	echo '<table class="table table-bordered">';
	echo "<thead>";
    echo "<tr>";
	echo "<th>学号</th>";
	echo "<th>科目</th>";
	echo "<th>成绩</th>";
	echo "</tr>";
	echo "</thead>";
    echo "<tbody>";
	while ($row=mysql_fetch_array($r)){
        echo "<tr>";
        echo "<td>".$row['studentId']."</td>";
        echo "<td>".$row['subject']."</td>";
        echo "<td>".$row['mark']."</td>";	
        echo "</tr>";
	}
	echo "</tbody>";
	echo "</table>";
<?php
header("Content-type: text/html; charset=UTF-8"); 
    $sel = $_GET['sel'];
    $tx1 = $_GET['tx1'];
	require_once 'conn.php';
	$sql='select * from score,student where score.studentId=student.studentId and score.subject="'.$sel.'" and score.studentId="'.$tx1.'"';
	$r=mysql_query($sql);
	echo '<table class="table table-bordered">';
	echo "<thead>";
    echo "<tr>";
	echo "<th>学号</th>";
	echo "<th>姓名</th>";
	echo "<th>科目</th>";
	echo "<th>成绩</th>";
	echo "</tr>";
	echo "</thead>";
    echo "<tbody>";
	while ($row=mysql_fetch_array($r)){
        echo "<tr>";
        echo "<td>".$row['studentId']."</td>";
        echo "<td>".$row['name']."</td>";
        echo "<td>".$row['subject']."</td>";
        echo "<td>".$row['mark']."</td>";	
        echo "</tr>";
	}
	echo "</tbody>";
	echo "</table>";
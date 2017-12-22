<?php
require_once 'conn.php';
header("content-type:text/html;charset=utf-8");
//取表单数据
$studentid=$_POST['studentid'];
$term=$_POST['term'];
$subject=$_POST['subject'];
$mark=$_POST['mark'];

$sql = "INSERT INTO score(id,studentId,term,subject,mark) VALUES (null,'$studentid','$term','$subject' ,'$mark')";

if(mysql_query($sql)){
	echo "<script>alert('插入学生成绩成功！！！');parent.location.href='score.php';</script>";
}else{
	echo "<script>alert('插入学生成绩失败！！！');parent.location.href='score.php';</script>";
}
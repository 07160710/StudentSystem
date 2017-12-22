<?php
require_once 'conn.php';
header("content-type:text/html;charset=utf-8");
//取表单数据
$studentnumber=$_POST['studentnumber'];
$studentname=$_POST['studentname'];
$class=$_POST['class'];
$birthday=$_POST['birthday'];
$sex=$_POST['sex'];
$nation=$_POST['nation'];

$sql = "INSERT INTO student(id,studentId,name,className,birthday,sex,nation) VALUES (null,'$studentnumber','$studentname','$class' ,'$birthday' ,'$sex' ,'$nation')";

if(mysql_query($sql)){
	echo "<script>alert('插入学生信息成功！！！');parent.location.href='index.php';</script>";
}else{
	echo "<script>alert('插入学生信息失败！！！');parent.location.href='index.php';</script>";
}
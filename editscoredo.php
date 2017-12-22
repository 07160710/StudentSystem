<?php
require_once 'conn.php';
header ( "content-type:text/html;charset=utf-8" );
//利用隐藏的id值来更新数据
$id=$_POST['id'];
$studentid=$_POST['studentid'];
$term=$_POST['term'];
$subject=$_POST['subject'];
$mark=$_POST['mark'];
//写更新数据库语言
$sql="UPDATE score SET studentId='$studentid',term='$term',subject='$subject',mark='$mark' WHERE id=$id";
if(mysql_query($sql)){
	echo "<script>alert('学生科目成绩修改成功！！！');parent.location.href='score.php';</script>";
} else{
	echo "<script>alert('学生科目成绩修改失败！！！');parent.location.href='score.php';</script>";
}
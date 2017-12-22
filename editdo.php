<?php
require_once 'conn.php';
header ( "content-type:text/html;charset=utf-8" );
//利用隐藏的id值来更新数据
$id=$_POST['id'];
$studentnumber=$_POST['studentnumber'];
$studentname=$_POST['studentname'];
$class=$_POST['class'];
$birthday=$_POST['birthday'];
$sex=$_POST['sex'];
$nation=$_POST['nation'];
//写更新数据库语言
$sql="UPDATE student SET studentId='$studentnumber',name='$studentname',className='$class',birthday='$birthday',sex='$sex',nation='$nation' WHERE id=$id";
if(mysql_query($sql)){
	echo "<script>alert('修改成功！！！');parent.location.href='index.php';</script>";
} else{
	echo "<script>alert('修改失败！！！');parent.location.href='index.php';</script>";
}
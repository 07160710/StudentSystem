<?php
require_once 'conn.php';
header("content-type:text/html;charset=utf-8");
$username = $_REQUEST['username'];
$password = $_REQUEST['password'];
$password2 = sha1($password);
$sql = "INSERT INTO user(id, username, password, status) VALUES (null,'$username','$password2',1)";

if(mysql_query($sql)){
	echo "<script>alert('注册成功！去登录');parent.location.href='login.php';</script>";
}else{
	echo "<script>alert('注册失败！！');parent.location.href='register.php';</script>";
}
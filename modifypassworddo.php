<?php
header ( "content-type:text/html;charset=utf-8" );
if (! isset ( $_SESSION )) {
	session_start ();
}
if (! isset ( $_SESSION ['userName'] )) {
	header ( "location:login.php" );
} else {
	$oldpassword = sha1 ( $_POST ['oldpassword'] );
	$newpassword = sha1 ( $_POST ['newpassword'] );
	$againpassword = sha1 ( $_POST ['againpassword'] );
	//验证两次是否一致
	if($newpassword!=$againpassword){
		echo "<script>alert('两次密码不一致！');</script>";
		echo "两次密码不一致！<br/>";
		echo "<a href='newpassword.php>返回</a>";
	}
	//取出用户名
	$username = $_SESSION['userName'];
	require_once 'conn.php';
	// 根据用户名和密码去查询帐号表
	$sql = "select * from user where username= '$username' and password='$oldpassword'";
	$result = mysql_query ( $sql, $conn );
	if ($row = mysql_fetch_array ( $result )) {
		$id = $row['id'];
		//修改密码
		$query = "UPDATE user SET password='$newpassword' WHERE id='$id'";
		$result = mysql_query ( $query, $conn );
		if($result){
			//清除Session
			session_destroy();
			echo "<script>alert('密码修改成功!');parent.location.href='login.php';</script>";
		}else{
			echo "<script>alert('密码修改失败!');parent.location.href='index.php';</script>";
		}
	} else {
		echo "<script>alert('原始密码错误!');parent.location.href='index.php';</script>";
	}
}
?>
<?php
if(!isset($_SESSION)){
    session_start();
}
session_destroy();
header ( "content-type:text/html;charset=utf-8" );
// header("location:login.php");
echo "<script>alert('退出成功');parent.location.href='login.php';</script>";
?>
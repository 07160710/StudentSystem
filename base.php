<?php 
if (! isset ( $_SESSION )) {
    session_start ();
}
if (! isset ( $_SESSION ['userName'] )) {
    header ( "location:login.php" );
}
$userName = $_SESSION ['userName'];
//计算当前文件名
$url = $_SERVER['PHP_SELF'];
$start = strrpos($url,'/');
$end = strrpos($url,'.');
$menuName = substr($url,$start+1,$end-$start-1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>学生管理系统</title>
        <link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link type="text/css" href="css/theme.css" rel="stylesheet">
        <link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'
            rel='stylesheet'>
        <script type="text/javascript" src="scripts/laydate.js"></script>
    </head>
    <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                        <i class="icon-reorder shaded"></i></a><a class="brand" href="index.php">&nbsp;学生信息系统</a>
                    <div class="nav-collapse collapse navbar-inverse-collapse">
                         <ul class="nav pull-right">
                            <li><a href="#">用户名：<?=$userName?>&nbsp;&nbsp;&nbsp;</a></li>
                             <li class="nav-user dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"> 
                                <img src="images/user.png" class="nav-avatar" />
                                <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="register.php">注册账号</a></li>
                                    <li><a href="modifypassword.php">修改密码</a></li>
                                    <li><a href="loginout.php">退出登录</a></li>
                                </ul>
                            </li>
                        </ul> 
                    </div>
                </div>
            </div>
        </div>
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="span3">
                        <div class="sidebar">
                            <ul class="widget widget-menu unstyled">
                                <li class="active">
                                    <a <?="index"==$menuName?"class='active-menu'":""?> href="index.php"><i class="menu-icon icon-dashboard"></i>学生信息管理</a></li>
                                <li><a href="subject.php" <?="subject"==$menuName?"class='active-menu'":""?> ><i class="menu-icon icon-bullhorn"></i>科目信息管理</a></li>
                                <li><a href="score.php" <?="score"==$menuName?"class='active-menu'":""?> ><i class="menu-icon icon-bullhorn"></i>成绩信息管理</a></li>
                            </ul>
                        </div>
                    </div>
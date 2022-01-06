<?php
header('Content-type:text/html;charset=utf-8');
echo '<pre>';

//连接认证
$conn=mysqli_connect('127.0.0.1:3306','root','123456') or die("连接失败 ".mysqli_connect_error());
//设定字符集
mysqli_query($conn,'set names utf8');
//选择数据库
mysqli_query($conn,'use News');


////连接认证
//$conn2=mysqli_connect('116.62.155.140:3306','root','ma1bao2','News') or die("连接失败 ".mysqli_connect_error());
////设定字符集
//mysqli_query($conn2,'set names utf8');
////选择数据库
//mysqli_query($conn2,'use News');


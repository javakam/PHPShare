<?php 
header("Content-type:text/html;charset=utf-8");
//输出$_SERVER信息
$str = '';
$str = "文档根目录：" . $_SERVER['DOCUMENT_ROOT'];
$str .= "<br />浏览当前页面的用户的 IP 地址：" . $_SERVER['REMOTE_ADDR'];
$str .= "<br />域名：" . $_SERVER['SERVER_NAME'];
$str .= "<br />当前运行脚本所在的服务器的 IP 地址。 " . $_SERVER['SERVER_ADDR'];
echo $str;
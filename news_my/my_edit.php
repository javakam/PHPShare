<?php
//新闻管理：修改指定新闻-找到指定id的对象,跳转到编辑页
//🐖编辑页不同于添加页面...不太灵活
header('Content-type:text/html;charset=utf-8');


$id=isset($_GET['id'])==true?$_GET['id']:-1;
if($id==-1){
	header('Refresh:3;url=index.php');
	echo '当前要修改的新闻不存在！';
	exit;
}

include_once 'my_public.php';
$res=execSQL($conn,"select * from n_news where id = ".$id);
$update= mysqli_fetch_assoc($res);

//print_r($update);
include_once 'news_edit.html';












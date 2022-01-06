<?php

	//新闻管理：删除指定新闻
	header('Content-type:text/html;charset=utf-8');

	//接收要删除的新闻ID
	$id = isset($_GET['id']) ? (integer)$_GET['id'] : 0;	//0不会存在
	if($id == 0) {
		header('Refresh:3;url=news.php');
		echo '当前要删除的新闻不存在！';
		exit;
	}

	//删除数据
	include_once 'my_public.php';

	//组织SQL并执行
	execSQL($conn,'delete from n_news where id = ' . $id);


	//删除后更新页面
	
	//方案一
	/*header('Refresh:0;url=index.php');*/
	
	
	//方案二 效果更好,页面不会重新刷新
	
	$res = execSQL($conn,"select * from n_news");				//拿到结果集
	$news = array();
	while($row = mysqli_fetch_assoc($res)){
		$news[] = $row;
	}
	include_once 'news.html';
	
	
	
	
	
	
	
	
	
	
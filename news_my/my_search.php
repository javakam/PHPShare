<?php

	//新闻管理：删除指定新闻
	header('Content-type:text/html;charset=utf-8');
	
	
	//获取关键字,进行模糊查询
	$keywords=$_POST['title'];
	
	include_once 'my_public.php';
	//组织SQL并执行
	$res=execSQL($conn,"select * from n_news where title like '%$keywords%' ");
	
	$news=array();
	
	while($row=mysqli_fetch_assoc($res)){
		$news[]= $row ;
	}
	
	include_once 'news.html';
	
	
	
	
	
	
	
	
	
	
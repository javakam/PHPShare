<?php
	header('Content-type:text/html;charset=utf-8');
	echo '<pre>';
	
	//1. 接收数据
	//接受用户提交数据
	var_dump($_POST);
	
	$title=isset($_POST['title'])?trim($_POST['title']):'';		//title 是字符串(重要)
	$isTop=isset($_POST['isTop'])?(integer)$_POST['isTop']:2;	//数字需求,而且不重要
	$publisher=isset($_POST['publisher'])?trim($_POST['publisher']):'佚名';
	$content=isset($_POST['content'])?trim($_POST['content']):'';//trim通常针对字符串
	//echo $title;
	
	//2. 数据验证：合法性验证。标题不能为空，内容不能为空
	//3. 提示用户，同时让用户重新再来（回到新增表单页面）
	if(empty($title)||empty($content)){
		//提示同时回到提交页
		//🐖 header 之前不能有 echo 等输出,但不会影响后面的代码执行
		//🐖 url 开发中应使用绝对路径
		header('Refresh:3;url=news_add.html');	//header前不能有输出，header：refresh不会阻止脚本执行
		
		//标题和内容至少有一个为空
		//echo '标题和内容都不能为空！';
		
		//阻止脚本继续执行
		exit('标题和内容都不能为空！');
	}
	
	//4. 数据入库
	include_once 'my_public.php';
	
	$time=time();
	$sql="insert into n_news values(null,'{$title}',$isTop,'{$content}','{$publisher}',$time)";
	
	$insert_id = execSQL($conn,$sql);

	//4. 提示用户操作结果，并跳转到列表页（跳转到详情页）
	//成功操作,提示同时去到列表页
	header('Refresh:3;url=index.php');
	echo $title . ' 增加成功！';	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
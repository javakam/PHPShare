<?php
	
	header('Content-type:text/html;charset=utf-8');

	//连接认证
	$conn=mysqli_connect('127.0.0.1:3306','root','123456') or die("连接失败 ".mysqli_connect_error());

	//封装MySQL语法错误检查函数并执行
	/* 
	 * @param $link  数据库连接对象
	 * @param string $sql，要执行的SQL指令
	 * @return $res，正确执行完返回的结果，如果SQL错误，直接终止
	*/
	function execSQL($link,$sql){
		//执行SQL
		$res = mysqli_query($link,$sql);

		//处理可能存在的错误
		if(!$res){
			echo 'SQL执行错误，错误编号为：' . mysqli_errno($link) . '<br/>';
			echo 'SQL执行错误，错误信息为：' . mysqli_error($link) . '<br/>';

			//终止错误继续执行
			exit;
		}

		//返回结果
		return $res;
	}

	//字符集处理
	execSQL($conn,'set names utf8');
	//选择数据库
	execSQL($conn,'use News');

	//mysqli_close($conn);
	
	
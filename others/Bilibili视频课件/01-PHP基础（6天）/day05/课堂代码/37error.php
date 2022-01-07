<?php

	//PHP错误处理

	//处理脚本让浏览器按照指定字符集解析的方法
	header('Content-type:text/html;charset=utf-8');


	//书写代码
	$a = 100;

	//输出
	echo $a;


	//除法运算
	$b = 0;

	if($b == 0){
		//人为触发错误
		trigger_error('除数不能为0！');				//默认notice，会继续执行
		trigger_error('除数不能为0！',E_USER_ERROR);//默认error，代码不会执行
	}


	echo 'hello ';
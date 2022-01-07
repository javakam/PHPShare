<?php

	//PHP可变函数

	//定义函数
	function display(){
		echo __LINE__, __FUNCTION__;
	}

	//定义变量
	$func = 'display';

	//可变函数
	//$func();

	//定义系统函数（假设）
	function sys_function($arg1,$arg2){
		//给指定的函数（第一个参数），求对应的第二个参数值的4次方
		//为实际用户输入的数值进行处理
		$arg2 = $arg2 + 10;

		return $arg1($arg2);	//user_function(20)
	}

	//定义一个用户函数：求一个数的四次方
	function user_function($num){
		return $num * $num * $num * $num;
	}

	//求10的4次方
	echo sys_function('user_function',10);



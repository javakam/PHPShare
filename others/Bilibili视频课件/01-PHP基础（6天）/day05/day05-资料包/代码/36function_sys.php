<?php

	//系统函数

	//输出相关
	echo print('hello world<br/>');
	print 'hello world<br/>';

	$a = 'hello world<br/>';
	print_r($a);

	echo '<hr/>';

	//时间函数
	echo date('Y 年 m 月 d 日 H:i:s',12345678),'<br/>';
	echo time(),'<br/>';
	echo microtime(),'<br/>';

	echo strtotime('tomorrow 10 hours');

	echo '<hr/><pre>';

	//函数相关函数
	function test($a,$b){
		//获取指定参数
		var_dump(func_get_arg(1));

		//获取所有参数
		var_dump(func_get_args());

		//获取参数数量
		var_dump(func_num_args());
	}

	//调用函数
	function_exists('test') && test(1,'2',3,4);
<?php

	//PHP中作用域

	//默认的代码空间：全局空间
	$global = 'global area';				//最终会被系统纳入到超全局变量中：$GLOBALS['global'] = global area;

	//局部变量（函数内部定义）
	function display(){
		//所有的形参都可以理解为局部变量
		$inner = __FUNCTION__;				//局部变量

		//访问全局变量
		//echo $global;						//不能访问

		//访问全局变量
		//var_dump($GLOBALS);
		//echo $GLOBALS['global'];


		//定义变量：使用全局变量
		global $global;						//全局空间存在
		echo $global;

		//定义变量：全局不存在
		global $local;
		$local = 'inner';
	}

	//调用函数
	display();

	//全局空间访问局部变量
	//echo $inner;							//不能访问

	//访问“局部”变量
	echo $local;

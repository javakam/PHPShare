<?php

	//函数返回值

	//定义函数
	function display(){
		//输出
		echo __FUNCTION__;	//输出当前函数名字
	}

	//var_dump(display());

	//加法运算
	function add($num1,$num2){
		return $num1 + $num2;		//返回结果

		//输出
		echo $num1;
	}

	$res = add(10,20);				//外部定义变量接收函数运行结果

	echo $res;

	//将结果提交给另外包含的文件
	return 'hello world';

	echo $res;						//不再执行：上面return结束了



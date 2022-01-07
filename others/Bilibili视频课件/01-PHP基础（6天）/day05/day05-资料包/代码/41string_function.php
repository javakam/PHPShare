<?php

	//字符串函数

	$str = ' abcd e f ';


	//字符串大小写
	//echo strtoupper($str),'<br/>';
	//echo ucfirst($str);

	//字符串截取
	//echo substr($str,1,3),'<br/>';
	//echo strstr($str,'c');

	//var_dump(trim($str));


	$str = '123a234a3b2a';

	$age = 50;
	$name = 'TOM';

	//格式化输出
	//echo sprintf("你好，今年我%d岁,我叫%s",$age,$name);

	//字符串替换
	//echo str_replace('a','b',$str);

	//查找位置
	//echo strpos($str,'a'),'<br/>';
	//echo strrpos($str,'a');


	//其他字符串函数
	$str = 'abcdefg';

	echo str_repeat($str,5),'<br/>';
	echo str_shuffle($str);
<?php

	//PHP常量


	//使用函数定义常量：define
	define('PI',3.14);

	//使用const关键字定义
	const PII = 3;

	//定义特殊常量
	define('-_-','smile');
	//const -_- = 'smile';	//错误


	//使用常量
	echo PI;

	//echo -_-;				//特殊符号不能直接使用
	echo constant('-_-');


	//系统常量
	echo '<hr/>',PHP_VERSION,'<br/>',PHP_INT_SIZE,'<br/>',PHP_INT_MAX;

	//魔术常量
	echo '<hr/>';
	echo __DIR__,'<br/>',__FILE__,'<br/>',__LINE__,'<br/>';
	echo __LINE__;
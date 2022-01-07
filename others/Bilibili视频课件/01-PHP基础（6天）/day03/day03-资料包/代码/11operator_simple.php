<?php

	//运算符

	//算术运算符
	$a = $b = 10;		//连贯赋值运算：两个不同变量
	$c = 0;

	//var_dump($a / 0);	//错误：被除数不能为0

	echo '<hr/>';


	//比较运算符
	$a = '123';	//字符串
	$b = 123;	//整型

	//判断相等
	var_dump($a == $b);

	//全等判断
	var_dump($a === $b);


	echo '<hr/>';

	$a = 'weekend';
	$b = 'goods';

	//逻辑与
	var_dump($a == 'weekend' && $b == 'good');

	//逻辑或
	var_dump($a == 'weekend' || $b == 'good');

	//逻辑非
	var_dump($b == 'good');
	var_dump(!($b == 'good'));

	echo '<hr/>';

	//连接运算符
	$a = 'hello ';
	$b = 123;

	echo $a . $b;	//将a变量和b变量连接起来

	$a .= $b; //$a = $a . $b;
	echo $a;


	//错误抑制符
	echo '<hr/>';
	$a = 10;
	$b = 0;
	
	//$a % $b;
	@($a % $b);


	//三木运算符
	echo '<hr/>';
	$a = 10;

	$b = $a > 10 ? 100 : 0;
	echo $b;


	//自操作符
	echo '<hr/>';

	$a = $b = 1;

	$a++;
	++$b;				//独立操作，不参与其他运算
	echo $a,$b;

	echo '<br/>';
	echo $a++,++$b;		//$a和$b不只是独立运算，还参与了输出操作

	echo $a,$b;


	$a = 10;
	$b = 5;

	$a += $b;			//$a = $a + $b = 15;
	$a -= $b - 1;		//$a = $a - ($b - 1);		//15 - 5 + 1 = 11
	echo '<br/>',$a,$b;
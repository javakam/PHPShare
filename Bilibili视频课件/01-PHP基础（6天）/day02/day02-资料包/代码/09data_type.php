<?php

	//数据类型

	//创建数据
	$a = 'abc1.1.1';
	$b = '1.1.1abc';

	//自动转换
	echo $a + $b;		//算术+运算，系统先转换成数值类型（整型和浮点型），然后运算

	//强制转换
	echo '<br/>',(float)$a,(float)$b;


	//判断数据类型
	echo '<hr/>';
	var_dump(is_int($a));				//false
	var_dump(is_string($a));			//true

	echo '<hr/>';
	echo gettype($a),'<br/>';

	//设置类型
	var_dump(settype($b,'int'));	
	echo gettype($b),$b;
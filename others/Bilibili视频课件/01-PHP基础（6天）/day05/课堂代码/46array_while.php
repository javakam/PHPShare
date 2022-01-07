<?php

	//while配合each和list遍历数组

	$arr = array(1,'name' => 'Tom',3,'age' => 30);

	echo '<pre>';
	//each函数指针操作
	//print_r(each($arr));
	//print_r(each($arr));
	//print_r(each($arr));
	//print_r(each($arr));
	//var_dump(each($arr));

	//list结构
	$arr = array(1,2 => 1);

	list($first) = $arr;
	//list($first,$second) = $arr;		//错误：second变量对应的下标为元素下标1的，但是数组没有
	//var_dump($first,$second);	


	//while循环
	$arr = array(1,'name' => 'Tom',3,'age' => 30);

	while(list($key,$value) = each($arr)){
		//list搭配each
		//list($key,$value) = each($arr);

		//输出
		echo 'key is :' . $key . ' value is :' . $value . '<br/>';
	}
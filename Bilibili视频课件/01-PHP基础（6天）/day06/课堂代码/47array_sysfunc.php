<?php

	//PHP数组相关函数


	//排序函数
	$arr = array(3,1,5,2,0);
	echo '<pre>';

	$sort_arr = sort($arr);
	//asort($arr);


	//krsort($arr);
	//print_r($arr);
	shuffle($arr);
	//print_r($arr);
	shuffle($arr);
	//print_r($arr);

	$arr = array(3,1,5,2,0);
	//指针函数
	//echo current($arr),'<br/>';
	//echo key($arr),'<br/>';


	//echo next($arr),next($arr),'<br/>';
	//echo prev($arr),'<br/>';

	//echo end($arr),'<br/>';
	//echo reset($arr),'<br/>';


	//其他函数

	//模拟数据结构：栈和队列
	$arr = array();

	//栈：先压栈后出栈：都是从一端出来
	//前面：array_shift/array_unshift
	//后面：array_push/array_pop
	//压栈
	array_push($arr,3);
	array_push($arr,2);
	array_push($arr,1);
	//print_r($arr);
	//出栈
	//echo array_pop($arr),array_pop($arr),array_pop($arr),'<br/>';


	//队列：先排队，先出来，一端进，另外一端出
	//后进前出：array_push/array_shift
	//前进后出：array_unshift/array_pop
	$arr = array();

	//入队
	array_unshift($arr,3);
	array_unshift($arr,2);
	array_unshift($arr,1);
	//print_r($arr);
	//出队
	//echo array_pop($arr),array_pop($arr),array_pop($arr),'<br/>';


	$arr = array(1,2,3,6,5);
	//print_r(array_reverse($arr));

	//var_dump(in_array(6,$arr));
	//var_dump(in_array(100,$arr));

	print_r(array_keys($arr));
	print_r(array_values($arr));
<?php

	//PHP数组

	//定义数组：array
	$arr1 = array('1',2,'hello');
	//var_dump($arr1);

	//定义数组：[]
	$arr2 = ['1',2,'hello'];
	//var_dump($arr2);

	//隐形数组：
	$arr3[] = 1;
	$arr3[10] = 100;
	$arr3[] = '1';
	$arr3['key'] = 'key';
	$arr3[1] = 'value';
	//var_dump($arr3);


	//特殊下标转换
	$arr4[false] = false;
	$arr4[true] = true;
	$arr4[NULL] = NULL;
	var_dump($arr4);
<?php

	//PHP数组排序：快速排序

	$arr = array(5,6,3,4,9,2,7,8);

	//快速排序
	function quick_sort($arr){
		//递归出口
		$len = count($arr);
		if($len <= 1) return $arr;
		//取出某个元素，然后将剩余的数组元素，分散到两个不同的数组中
		$left = $right = array();
		for($i = 1;$i < $len;$i++){
			//第一个元素作为比较元素
			//比较：小的放left中，大的放right中
			if($arr[$i] < $arr[0]){
				$left[] = $arr[$i];
			}else{
				$right[] = $arr[$i];
			}
		}
		//$left和$right数组元素没有排好序：递归点
		$left = quick_sort($left);
		$right = quick_sort($right);
		//合并三个“数”组
		return array_merge($left,(array)$arr[0],$right);
	
	}

	echo '<pre>';
	print_r(quick_sort($arr));


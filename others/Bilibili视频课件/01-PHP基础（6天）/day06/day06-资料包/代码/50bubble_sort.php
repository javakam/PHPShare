<?php

	//数组排序算法：冒泡排序


	$arr = array(1,4,2,9,7,5,8);

	//2、	想办法让下面可以每次找出最大值的代码重复执行
	for($i = 0,$len = count($arr);$i < $len;$i++){

		//1、	想办法将最大的值放到最右边去
		for($j = 0; $j < $len - 1 - $i;$j++){
			//判断：两两相比
			if($arr[$j] > $arr[$j+1]){
				//左边比右边大：交换
				$temp = $arr[$j];
				$arr[$j] = $arr[$j+1];
				$arr[$j+1] = $temp;
			}
		
		}
	}

	echo '<pre>';
	print_r($arr);
<?php

	//查找算法

	//顺序查找

	$arr = array(1,3,6,8,23,68,100);

	//顺序查找：从数组第一个元素开始，挨个匹配
	function check_order($arr,$num){
	
		//全部匹配
		for($i = 0,$len = count($arr);$i < $len;$i++){
			//判断
			if($arr[$i] == $num){
				return $i;
			}
		}

		return false;
	}

	//var_dump(check_order($arr,5));

	//二分查找算法
	$arr = array(1,3,6,8,23,68,100);
	$res = 100;

	function check_break($arr,$res){
		//1、	得到数组边界
		$right = count($arr);
		$left  = 0;
		//2、	循环匹配
		while($left <= $right){
			//3、	得到中间位置
			$middle = floor(($right + $left) / 2);
			//4、	匹配数据
			if($arr[$middle] == $res){
				return $middle + 1;
			}
			//5、	没有找到
			if($arr[$middle] < $res){
				//值在右边
				$left = $middle + 1;
			}else{
				//值在左边
				$right = $middle - 1;
			}		
		}
		return false;
	}

	var_dump(check_break($arr,$res));
<?php

	//多维数组

	//定义二维数组
	$info = array(
		array('name' => 'Jim','age' => 30),
		array('name' => 'Tom','age' => 28),
		array('name' => 'Lily','age' => 20)				
		//最后一个元素，后面可以跟逗号不影响（不建议）
	);

	echo '<pre>';
	print_r($info);
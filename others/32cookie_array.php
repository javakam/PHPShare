<?php

	//使用“数组”保存COOKIE

	//尝试保存数组
	//setcookie('goods_ids',array(1,2,3,4,5));


	//伪装数组
	setcookie('goods_ids[0]',1);
	setcookie('goods_ids[1]',2);
	setcookie('goods_ids[2]',3);
	setcookie('goods_ids[3]',4);

	echo '<pre>';
	//print_r($_COOKIE);

	echo $_COOKIE['goods_ids'][2];
<?php

	//循环结构：for循环


	//从1到10输出：初始为1，结果为10
	for($i = 1; $i <= 10;$i++){
		//输出
		//echo $i,'<br/>';
	}

	//最后：$i == 11
	//echo $i;


	//从1到10输出（10通常是动态得到）
	for($i = 1,$end = 10;$i <= $end;$i++){
		//echo $i,'<br/>';
	}


	//无条件for循环
	for(;;){
		echo 'hello world<br/>';
	}
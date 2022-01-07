<?php

	//PHP变量传值


	//值传递
	$a = 10;
	$b = $a;
	$b = 5;
	echo $a,$b,'<br/>';


	//引用传递
	$c = 10;
	$d = &$c;
	$c = 5;
	echo $c,$d,'<br/>';
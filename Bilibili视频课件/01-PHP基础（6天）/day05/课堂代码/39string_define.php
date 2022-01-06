<?php

	//PHP字符串：定义
	header('Content-type:text/html;charset=utf-8');

	//引号定义
	$str1 = 'hello';
	$str2 = "hello";
	//var_dump($str1,$str2);


	//结构化定义
	//heredoc结构
	$str3 = <<<EOD
		hello
			world
EOD;

	//nowdoc结构
	$str4 = <<<'EOD'
		hello
			world
EOD;

	//var_dump($str3,$str4);


	//定义字符串识别转义符号
	$str1 = 'abc\r\ndef\t\'\"\$fg';
	$str2 = "abc\r\ndef\t\'\"\$fg";

	//echo $str1,'<br/>',$str2;


	$a = 'hello';
	//变量识别
	$str1 = 'abce $a dfg';
	$str2 = "abce $a dfg";	
	$str3 = "abce$adfg";	
	$str4 = "abce{$a}dfg";	
	echo $str1,'<br/>',$str2,'<br/>',$str3,'<br/>',$str4;

	$str1 = <<<EOD
	//这是弹出内容
		<script>
			alert('$str1');	//js弹出字符串必须要有引号
		</script>
EOD;

	echo $str1;
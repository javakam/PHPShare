<?php

	//设置session

	//开启
	session_start();

	//获取sessionID和名字
	$id = session_id();			//获取是在session_start之后
	$name = session_name();		//拿到名字（php.ini session.name）
	//echo $name . ' = ' . $id;



	//设置内容
	$_SESSION['name'] = 'mark';

	//传递给另外一个脚本
	echo "<a href='38session_nocookie2.php?{$name}={$id}'>click</a>";
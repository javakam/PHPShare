<?php

	//session基本使用

	//var_dump($_SESSION);		//必须先开启session


	//开启session
	session_start();

	//var_dump($_SESSION);

	//设置session数据
	$_SESSION['name'] = 'Mark';
	$_SESSION['hobby'] = array('basketball','football');

	//访问session数据
	echo $_SESSION['name'];
<?php

	//删除session数据

	//开启session
	session_start();

	//读取session
	var_dump($_SESSION);

	//删除数据
	unset($_SESSION['name']);

	//删除全部数据
	$_SESSION = array();
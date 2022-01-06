<?php

	//访问session
	//接收数据
	$name = session_name();
	$id = $_GET[$name];

	//设定sessionID
	session_id($id);


	//开启session
	session_start();


	//访问
	var_dump($_SESSION);
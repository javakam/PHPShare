<?php

	//COOKIE跨子域

	//访问
	var_dump($_COOKIE);

	//设定一个本地COOKIE
	setcookie('local','local',0,'/');

	//指定域名COOKIE
	setcookie('local2','local2',0,'/','www.myitcast.com');
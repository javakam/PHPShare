<?php

	//COOKIE生命周期

	//设置COOKIE
	setcookie('a1','a1');						//普通COOKIE，浏览器关闭失效
	setcookie('a2','a2',7*24*60*60);			//格林威治时间7天过期
	setcookie('a3','a3',time() + 7*24*60*60);	//格林威治时间从现在开始7天后过期

	//0生命周期
	setcookie('a4','a4',0);

	//“删除”COOKIE
	//setcookie('a3','');			//清空内容
	setcookie('a3','a3',time());	//清空内容
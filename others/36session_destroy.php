<?php

	//销毁session文件

	//开启session
	session_start();
	//var_dump($_SESSION);

	//删除数据：清空$_SESSION
	//var_dump($_SESSION);

	//测试效果
	sleep(5);		//脚本休息5秒执行


	//销毁session
	session_destroy();
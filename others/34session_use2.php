<?php

	//使用33session_use.php中保存的数据


	//开启session
	session_start();

	//访问
	echo $_SESSION['name'];
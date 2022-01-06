<?php

	//保存session数据

	session_start();

	$_SESSION['age'] = 40;


	echo "<a href='40session_nocookie4.php'>click</a>";
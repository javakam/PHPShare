<?php
第一题：
date(‘Y-m-d H:i:s’, strtotime(“-1 day”));

第三题：
	第一小题：
	//第一步:获得末尾.的位置
	$start = strrpos($str,'.');
	//第二步 : 截取
	echo substr($str,$start);
	第二题：
	function code(){
	    $rand = md5(rand(1,100000000000));
	    return substr($rand,0,4);
	}
	echo code();

第四题：
$arr = array(
	array(1,2,3,7),
	array('name'=>'it','pass'=>'123'),
	array(1,'sex'=>'man',3), 
);
foreach ($arr as $key => $value) {
	foreach ($value as $k => $v) {
		echo $v ,',';
	}
	echo '<br />';
}


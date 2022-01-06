<?php

########################### 初始化数据库 ###########################

# 1. 创建数据库 news (init.sql)
# 2. 初始化数据库

//引入初始文件
include_once 'init-mysql.php';

//组织SQL指令
$pub_time = time();
$sql      = "insert into n_news values(null,'PHP的MySQL扩展',1,'MySQL扩展......','changbao',{$pub_time})";

//执行SQL指令
$res = mysqli_query( $conn, $sql );

echo '<pre>';
//本地
if ( $res ) {
	//操作成功：通常是返回自增长ID给用户
	echo '数据插入成功!';
} else {
	//代表结果为false
	echo 'SQL指令执行出错，错误编号为：' . mysqli_errno( $conn ) . '<br/>';
	echo 'SQL指令执行出错，错误信息是：' . mysqli_error( $conn ) . '<br/>';
	//终止代码执行
	exit();
}

//获取自增长ID
echo '<br>' . mysqli_insert_id( $conn );

//mysqli_close($conn);
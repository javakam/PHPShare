<?php

//✨ 演示地址: http://demo.cn/demo_session.php
echo '<pre>';
//开启 session
session_start();

////1. 获取 session id和名字
//$id   = session_id();          //获取是在session_start之后
//$name = session_name();        //拿到名字（php.ini session.name）
//echo $name . ' = ' . $id;

//2. 设置 session
//var_dump( $_SESSION );  //必须先开启session
////设置session数据
//$_SESSION['name']  = 'Mark';
//$_SESSION['hobby'] = array( 'basketball', 'football' );
////访问session数据
//echo $_SESSION['name'];

////3. 删除 session
//var_dump( $_SESSION );
////删除数据
//unset( $_SESSION['name'] );
////删除全部数据
//$_SESSION = array();
//var_dump( $_SESSION );

////4. 销毁 session -> 🍎销毁的是存储 session 的文件, 通常需要先删除再销毁
//$res = session_destroy();
//echo '销毁结果: ' . $res;

<?php

########################### 基础语法、变量和数据类型 ###########################

//修改变量
//$param = 2;
//echo ' 修改变量: '. $param;
////删除变量：使用unset(变量名字)
//unset($param);
////echo ' 修改变量: ' . $param;
//var_dump($param);

//可变变量
//$a   = 'ccc';
//$b   = 'bb';
//$ccc = 'b';
//function ccc() {
//	echo 'hello';
//}
//echo $$a;//b
//echo $a();//hello

//预定义变量
//$_GET：获取所有表单以get方式提交的数据
//$_POST：POST提交的数据都会保存在此
//$_REQUEST：GET和POST提交的都会保存
//$GLOBALS：PHP中所有的全局变量
//$_SERVER：服务器信息
//$_SESSION：session会话数据
//$_COOKIE：cookie会话数据
//$_ENV：环境信息
//$_FILES：用户上传的文件信息
//var_dump( $_REQUEST );

////常量
//const PI= 3.14;
////系统常量
//echo '<hr/>',PHP_VERSION,'<br/>',PHP_INT_SIZE,'<br/>',PHP_INT_MAX;
////魔术常量
//echo '<hr/>';
//echo __DIR__,'<br/>',__FILE__,'<br/>',__LINE__,'<br/>';
//echo __LINE__;

########################### 运算符和流程控制 ###########################
/*
比较运算符
==：左边的与右边的相同（大小相同）
===：全等于，左边与右边相同：大小以及数据的类型都要相同
 */
//$a = '123';	 //字符串
//$b = 123;	 //整型
////判断相等
//var_dump($a == $b);
////全等判断
//var_dump($a === $b);

//连接运算符
//$a = 'hello ';
//$b = 123;
//echo $a . $b;  //将a变量和b变量连接起来
//$a .= $b; //$a = $a . $b;
//echo $a;

########################### 文件包含 ###########################
//分为向上包含和向下包含
//echo '<pre>';
//
//include_once 'demo_include_up.php';
//echo '向上包含 -> ' . SIZE;
//
//echo '<hr/>';
//
//const PI = 3.14;
//include_once 'demo_include_down.php';

//include 和 include_once 的区别
//include 系统会碰到一次，执行一次；如果对统一个文件进行多次加载，那么系统会执行多次； include_once 只会执行一次;
//include 'demo_include_temp.php';
//
//echo '<br>';
//include 'demo_include_temp.php';
//
//echo '<br>';
//include 'demo_include_temp.php';
//
//include_once'demo_include_temp.php';
//include_once'demo_include_temp.php';

//文件加载路径

########################### 函数 ###########################
//函数支持默认值 - 类似于 Kotlin
//$num1 = 10;
//
////函数的默认值
//function jian( $num1 = 0, $num2 = 0 ) { //当前的$num1是形参，在编译时不执行，即便执行也是在jian函数内部，不会与外部的$num1变量冲突
//	echo $num1 - $num2;
//}
//🍎对应 Kotlin 写法
//fun jian(num1: Int = 0, num2: Int = 0): Int {
//	return (num1 - num2)
//}
//fun jian(num1: Int = 0, num2: Int = 0, block: (Int) -> Unit) {
//	block(num1 - num2)
//}

//引用传值
//function display( $a, &$b ) {
//	//修改形参的值
//	$a += 1;
//	$b += 2;
//	echo $a, '<br>', $b, '<br/>';
//}
//
//$a = 10;
//$b = 5;
//display( $a, $b );
////display( 10, 5 );
//
//echo '<hr/>', $a, '<br/>', $b;

########################### 字符串 ###########################
//结构化定义字符串 nowdoc heredoc
//heredoc结构
//$str3 = <<<EOD
//		hello
//			world
//EOD;
//
////nowdoc结构
//$str4 = <<<'EOD'
//		hello
//			world
//EOD;
//var_dump($str3," --- ",$str4);

# 类似于 Kotlin 原始字符串
//val str= """
//		hello
//			world
//    """

//🍎注意注释部分显示效果
//$a = 'hello';
//$str1 = <<<XXX
//  //这是弹出内容
//  <script>
//    alert('$a');	//js弹出字符串必须要有引号
//  </script>
//XXX;
//
//echo $str1;

//字符串函数

########################### 数组 ###########################
//隐形数组
//$arr3[] = 1;
//$arr3[10] = 100;
//$arr3[] = '1';      // [11]=> string(1) "1"
//$arr3['key'] = 'key';
//$arr3[1] = 'value'; // [1]=> string(5) "value"
//$arr3[] = 'xxx';    // [12]
//var_dump($arr3);

//其他函数
//count()：统计数组中元素的数量
//array_push()：往数组中加入一个元素（数组后面）
//array_pop()：从数组中取出一个元素（数组后面）
//array_shift()：从数组中取出一个元素（数组前面）
//array_unshift()：从数组中加入一个元素（数组前面）

//灵活的在数组前或后插入数据
//array_merge()
//1
//$data = [
//	'name'  => "xiaoming",
//	'phone' => "110",
//	'state' => 1
//];
//$data = array_merge( $data, [ 'age' => 18 ] );

//2
//$jsonStr = <<<XXX
//{
//    "url": "http://www.bejson.com",
//    "links": [
//        {
//            "name": "Google",
//            "url": "http://www.google.com"
//        },
//        {
//            "name": "Baidu",
//            "url": "http://www.baidu.com"
//        }
//    ]
//}
//XXX;
//$json = json_decode( $jsonStr, true );
////$obj = $json->{'links'}; //取对象
//$arr = $json['links'];     //取数组
//echo '<pre>';
//print_r( $arr );
//
//$arr = array_merge( $arr, [ array( "name" => 'Bejson', 'url' => 'https://www.bejson.com/' ) ] );
//echo '<hr/>';
//var_dump( $arr );


########################### 上传文件 ###########################
//header('Content-type:text/html;charset=utf-8');
//echo '<pre>';
//
//var_dump($_POST);
//var_dump($_FILES);

//✨ @See demo_upload.php  演示地址: http://demo.cn/demo_upload.html

########################### COOKIE ###########################
////设置COOKIE
//setcookie('a1','a1');						//普通COOKIE，浏览器关闭失效
//setcookie('a2','a2',7*24*60*60);			//格林威治时间7天过期
//setcookie('a3','a3',time() + 7*24*60*60);	//格林威治时间从现在开始7天后过期
//
////0生命周期
//setcookie('a4','a4',0);
////“删除” COOKIE
//setcookie('a3','');
//
////设定一个本地COOKIE
//setcookie('local','local',0,'/');
////指定域名COOKIE
//setcookie('local2','local2',0,'/','www.test.com');

//✨ @See demo_cookie.php  演示地址: http://demo.cn/demo_cookie.php


########################### SESSION ###########################
//✨ @See demo_session.php 演示地址: http://demo.cn/demo_session.php

########################### 新闻管理项目 ###########################
//news_my -> index.php







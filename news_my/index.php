<?php

//1. 获取所有新闻内容并显示
//操作数据库获取数据
include_once 'my_public.php';
//组织SQL获取所有新闻信息
$sql = "select * from n_news";
//执行
$res = execSQL( $conn, $sql );                //拿到结果集

//2. 从结果集中取出所有的记录：一次取一条，一条一个数组；然后将所有的记录放到一个数组中：形成一个典型的二维数组
//循环遍历所有结果
$news = array();                            //保存取出的记录（数组）

//方案1：获取结果集中记录数，然后for循环
//🐖 mysqli_num_fields 会造成指针下移,导致只能取出一半的结果
/*$num = mysqli_num_fields($res);
echo $num.'<br>';
for($i = 0;$i < $num;$i++){
	//🐖 $news[] 自增
	$news[] = mysqli_fetch_assoc($res);
}
*/

//方案2：利用while循环，每次取到数据之后判断保存数据的结果，只要结果不为false，那么一直取
while ( $row = mysqli_fetch_assoc( $res ) ) {
	$news[] = $row;
}
//echo '<pre>';
//print_r($news);

//3. 一个已经做好的HTML模板能够显示数据：前端
//包含显示模板（HTML）
include_once 'news.html';

//4. PHP想办法将数据在HTML中显示（二者结合）：PHP包含HTML
//修改 news.html
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
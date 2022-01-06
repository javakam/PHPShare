<?php

header( 'Content-type:text/html;charset=utf-8' );

/*
演示地址: http://demo.cn/demo_upload.html
步骤:
	封装出一个上传函数
	判断文件是否有效
	判断保存路径是否有效
	判断文件本身上传的过程中是否有错误：error
	文件类型的处理：通过MIME匹配即可
	文件格式的处理：后缀名的问题
	文件大小的处理
	移动到指定目录
	命名冲突的处理：上传同名文件？中文名字文件怎么办？
 */

/**
 * 单文件上传
 *
 * @param array $file 需要上传的文件信息：一维5元素数组（name \tmp_name\error\size\type)
 * @param array $allow_type 允许上传的MIME类型
 * @param string $path 存储的路径
 * @param string &$error 如果出现错误的原因
 * @param array $allow_format 允许上传的文件格式
 * @param int $max_size = 2097152，允许上传的最大值 2M
 */
function upload_single( $file, $allow_type, $path, &$error, $allow_format = array(), $max_size = 2097152 ) {
	//判断文件是否有效
	if ( ! is_array( $file ) || ! isset( $file['error'] ) ) {
		//文件无效
		$error = '不是一个有效的上传文件！';
		return false;
	}

	//判断文件存储路径是否有效
	if ( ! is_dir( $path ) ) {
		//路径不存在
		$error = '文件存储路径不存在！';
		//return false;
		mkdir( $path );
	}

	//判断文件上传过程是否出错
	switch ( $file['error'] ) {
		case 1:
		case 2:
			$error = '文件超出服务器允许大小！';
			return false;
		case 3:
			$error = '文件上传过程中出现问题，只上传一部分！';
			return false;
		case 4:
			$error = '用户没有选中要上传的文件！';
			return false;
		case 6:
		case 7:
			$error = '文件保存失败！';
			return false;
	}

//	echo '<pre>';var_dump( $_POST );var_dump( $_FILES );echo '</pre>';

	//判断MIME类型
	if ( ! in_array( $file['type'], $allow_type ) ) {
		//该文件类型不允许上传
		$error = '当前文件类型不允许上传！';
		return false;
	}

	//判断后缀是否允许
	//取出后缀
	$ext = ltrim( strrchr( $file['name'], '.' ), '.' );
	if ( ! empty( $allow_format ) && ! in_array( $ext, $allow_format ) ) {
		//不允许上传
		$error = '当前文件的格式不允许上传！';
		return false;
	}

	//判断当前文件大小是否满足当前需求
	if ( $file['size'] > $max_size ) {
		//文件过大
		$error = '当前上传的文件超出大小，最大允许' . $max_size . '字节!';
		return false;
	}

	//构造文件名字：类型_年月日+随机字符串.$ext
	$fullname = strstr( $file['type'], '/', true ) . date( 'YYYYmmdd' );
	//产生随机字符串
	for ( $i = 0; $i < 4; $i ++ ) {
		$fullname .= chr( mt_rand( 65, 90 ) );
	}
	//拼凑后缀
	$fullname .= '.' . $ext;

	//移动到指定目录
	if ( ! is_uploaded_file( $file['tmp_name'] ) ) {
		//文件不是上传的
		$error = '错误：不是上传文件！';
		return false;
	}

	if ( move_uploaded_file( $file['tmp_name'], $path . '/' . $fullname ) ) {
		//成功
		return '文件上传成功! ' . $fullname;
	} else {
		//移动失败
		$error = '文件上传失败！';
		return false;
	}
}

//提供数据
$file         = $_FILES['image'];
$path         = 'uploads';
$allow_type   = array( 'image/jpg', 'image/jpeg', 'image/gif', 'image/pjpeg', 'image/png' );
$allow_format = array( 'jpg', 'gif', 'jpeg', 'png' );
$max_size     = 8000000; //7.62939M  https://calc.itzmx.com/

if ( $filename = upload_single( $file, $allow_type, $path, $error, $allow_format, $max_size ) ) {
	echo $filename;
} else {
	echo $error;
}

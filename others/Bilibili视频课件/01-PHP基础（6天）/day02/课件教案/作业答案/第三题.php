<?php
$values = '';
if(!empty($_POST)){
	$num = $_POST['num'];
	$zhuanhuan = $_POST['zhuanhuan'];
	if($zhuanhuan == 2){
		$values = decbin($num);
	}elseif($zhuanhuan == 8){
		$values = decoct($num);
	}else{
		$values = dechex($num);
	}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>简历</title>
</head>
<body>
	<form action='' method="post">
		十进制：<input type="text" name="num">
		请选择要转换的进制：
		<select name="zhuanhuan" id="">
			<option value="2">二进制</option>
			<option value="8">八进制</option>
			<option value="16">十六进制</option>
		</select>
		<input type="submit" value="转换">
		转换结果：<input type="text" value="<?php echo $values ;?>"><br>
	</form>
</body>
</html>
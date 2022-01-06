<?php

$result = "";
$n1 = '';
$n2 = '';
$fuhao= '+';

if(!empty($_POST) ){	

	$n1 = $_POST['num1'];	
	$n2 = $_POST['num2'];
	$fuhao = $_POST['edu'];
	if($fuhao == "+"){
		$result = $n1 + $n2;
	}else if($fuhao == "-"){
		$result = $n1 - $n2;
	}else if($fuhao == "*"){
		$result = $n1 * $n2;
	}else if($fuhao == "/"){
		$result = $n1 / $n2;
	}else if($fuhao == "%"){
		$result = $n1 % $n2;
	}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>¼ÆËãÆ÷</title>
</head>
<body>
<form  action="" method="post">
	<input type="text"  name="num1" value="<?php echo $n1;?>"/>
	<select name="edu">
		<option value="+" <?php if($fuhao=='+') echo 'selected'; ?>>+</option>
		<option value="-" <?php if($fuhao=='-') echo 'selected'; ?>>-</option>
		<option value="*" <?php if($fuhao=='*') echo 'selected'; ?>>*</option>
		<option value="/" <?php if($fuhao=='/') echo 'selected'; ?>>/</option>
		<option value="%" <?php if($fuhao=='%') echo 'selected'; ?>>%</option>
	</select>
	<input type="text"  name="num2" value="<?php echo $n2;?>"/>
	<input type="submit" value="=" />
	<input type="text" value="<?php echo $result;?>" />
</form>
</body>
</html>

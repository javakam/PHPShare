<?php
	if(!empty($_POST)){
		echo "<pre>";
		print_r($_POST);
		echo "</pre>";
		print_r($_POST['love']);
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>简历</title>
</head>
<body>
	<form method="post">
		姓名：<input type="text" name="name"><br>
		密码：<input type="password" name="password"><br>
		性别：
			<input type="radio" name="sex" value="男">男 
			<input type="radio" name="sex" value="女">女<br>
		学历：
			<select name="edu">
				<option value="硕士">硕士</option>
				<option value="博士">博士</option>
				<option value="烈士">烈士</option>
			</select><br>
		爱好：
			<input type="checkbox" name="love[]" value="篮球">篮球
			<input type="checkbox" name="love[]" value="象棋">象棋
			<input type="checkbox" name="love[]" value="乒乓球">乒乓球<br>
		<input type="hidden" name="hidden_skills" value="我爸是李刚哟"><br>
		<input type="submit" value="提交">
	</form>
</body>
</html>

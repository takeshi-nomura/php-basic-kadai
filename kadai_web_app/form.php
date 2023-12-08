<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="UTF-8">
<title>kadai_web_app</title>
</head>

<body>
	<h2>社員情報入力フォーム</h2>


<body>
	<form action="confirm.php" method="post">
		<label for="employee_name">社員名:</label> <input type="text"
			id="employee_name" name="employee_name" value="" required> <br> <label
			for="employee_age">年齢:</label> <input type="text" id="employee_age"
			name="employee_age" value="" required> <br> <label for="department">所属部署:</label>
		<select id="department" name="department">
			<option value="開発部" selected>開発部</option>
			<option value="営業部">営業部</option>
			<option value="人事部">人事部</option>
		</select> <br> <input type="submit" value="送信">
	</form>
</body>

</html>

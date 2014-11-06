<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	   	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
	</head>
	<body>
		<!--<form name="form" method="post" action="account/login.php">
			<p>帳號:<input type="text" name="username"></p>
			<p>密碼:<input type="password" name="password"></p>
			<p><input type="submit" value="登入"></p>
		</form>-->
		<form name="form" method="get" action="account/get.php">
			<p>ID:<input type="text" name="id"></p>
			<p><input type="submit" value="登入"></p>
		</form>
		<!--<form name="form" method="post" action="account/xss.php">
			<p>輸入值:<input type="text" name="xss"></p>
			<p><input type="submit" value="輸入"></p>
		</form>-->
	</body>
</html>
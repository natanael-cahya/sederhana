<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>LOGIN GENG</title>
</head>
<body>
<form name="f1" method="post" action="<?= base_url('index.php/proses_login/cek'); ?>">
Username : <input type="text" name="user"><br>
Password : <input type="password" name="pw"><br><br>

<input type="submit" name="login" value="Login">
</form>
</body>
</html>
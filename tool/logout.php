<?php
//ファンクション読み込み
require_once('func_login.php');
//セッションを破壊
session_destroy();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>ログアウト</title>
</head>
<body>
<h1>ログアウト</h1>
<p>ログアウトしました</p>
<a href='../../public_html/index.html'>TOPへ</a>
</body>
</html>

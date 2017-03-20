<?php
//ファンクション読み込み
require_once('func_login.php');
$msg = "ユーザー名とパスワードを入力してください";
//ログインの判定
if(isset($_POST['user_id'])&&isset($_POST['pass_id'])){
	if(($_POST['user_id']==$db_user)&&($_POST['pass_id']==$db_pass)){
		$_SESSION['db_user']=$_POST['user_id'];
		$_SESSION['db_pass']=$_POST['pass_id'];
		header("Location:index.php");
		//$msg = "ログイン成功";
	}else{
		$msg = "入力値が違います";
	}
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>ログイン</title>
</head>
<body>
<h1>ログイン</h1>
<p><?php echo $msg;?></p>
<form name="form1" method="POST" action="login.php">
	<table>
		<tr>
			<td>ユーザー名</td>
			<td><input type="text" name="user_id" value=""></td>
		</tr>
		<tr>
			<td>パスワード</td>
			<td><input type="password" name="pass_id" value=""></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td><input type="submit" value="ログイン"></td>
		</tr>
	</table>
</form>
</body>
</html>

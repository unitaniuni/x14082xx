<?php
//DBアクセス用の変数呼び出し
require_once('./func_db.php');
//フォームに値が入力されているかをチェック
if($_POST==true){
	//レコードの削除
	DB_Delete("x14082",$_POST["no"]);
	//もとファイルへ戻る
	header("Location:./list.php");
}
//レコードの特定値を取得
if($_GET==true){
	$Entries = DB_SelectOne("x14082",$_GET['no']);
	$SelectALL = $Entries->fetch();
}
?>
<html>
<head>
<title>削除</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
<h1>削除</h1>
<a href="./list.php">戻る</a>
<hr>
<form method="POST" action="">
<table border="1">
<tr>
	<td>No.</td>
	<td><?php echo $SelectALL['no'];?>
	<input type="hidden" name="no" value="<?php echo $SelectALL['no'];?>"></td>
</tr>
<tr>
	<td>name</td>
	<td><?php echo $SelectALL['name'];?></td>
</tr>
<tr>
	<td>mail</td>
	<td><?php echo $SelectALL['mail'];?></td>
</tr>
<tr>
	<td>msg</td>
	<td><?php echo $SelectALL['msg'];?></td>
</tr>
<tr>
	<td colspan="2" align="center">
		<input type="submit" value="Done">
	</td>
</tr>
</table>
</form>


</body>
</html>

<?php
//DBアクセス用の変数呼び出し
require_once("func_db.php");
$html_str="";
$SQL_TEXT="SELECT * FROM blog;";
$QueryObj=DB_Access($SQL_TEXT);
//クエリ実行
while ($SelectALL=$QueryObj->fetch()) {
  $html_str.= $SelectALL['id'].":".$SelectALL['title']."<br>";
  $html_str.= $SelectALL['time']."<br>";
  $html_str.= nl2br($SelectALL['note'])."<br>";
  $html_str.= "<hr>";
}
?>
<html>
<head>
<title>一覧</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
<h1>一覧</h1>
<a href="./new.php">入力</a>
<hr>
<?php echo $html_str;?>
</body>
</html>

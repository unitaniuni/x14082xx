<?php
//DBアクセス用の変数呼び出し
require_once("func_db.php");
$html_str="";
$SQL_TEXT="SELECT * FROM x14082;";
$QueryObj=DB_Access($SQL_TEXT);
//クエリ実行
while ($SelectALL=$QueryObj->fetch()) {
  $html_str.= "No.".$SelectALL['no']."<br>";
  $html_str.= "name:".$SelectALL['name']."<br>";
  $html_str.= "mail:".$SelectALL['mail']."<br>";
  $html_str.= "text:".nl2br($SelectALL['msg'])."<br>";
  $html_str .= "<a href='comment_del.php?no=".$SelectALL['no']."'>削除</a>";
  $html_str.= "<hr>";
}
?>
<html>
<head>
<title>list</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
<h1>list</h1>
<a href="contact.php">入力</a>

<hr>
<?php echo $html_str;?>
</body>
</html>

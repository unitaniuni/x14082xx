<?php
session_start();
//変数の定義
$db_user = "9999";
$db_pass = "9999";
//セッションの使用


//ログイン判定
function LogINCheck() {
  global $db_user, $db_pass;
  if((isset($_SESSION['db_user'])==false)||(isset($_SESSION['db_pass'])==false)) {
    header("Location:login.php");
  }
  if(($_SESSION['db_user']!=$db_user)||($_SESSION['db_pass']!=$db_pass)) {
    header("Location:login.php");
  }
}
?>

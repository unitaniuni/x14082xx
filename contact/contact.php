<?php
//DBアクセス用の変数呼び出し
require_once('func_db.php');
$html_str="";
//フォームに値が入力されているかをチェック
if(isset($_POST['name'])){
	DB_Insert("x14082", $_POST);
	//飛ばす
	 header("Location:contacted.php");
}
//print_r($_POST);
?>
<html>
<head>
<title>contact</title>
<link rel="stylesheet" href="./css/conf1.css" type="text/css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<!-- Save for Web Slices (contact.psd) -->

<div class="contact"><img src="images/contact.png" width="340" height="85" alt=""></div>

<div class="menu">
	<ul>
	<li id="m1"><a href="../index.html"><img src="images/home.png" width="155" height="35" alt=""></a></li>
	<li id="m2"><a href="../profile/profile-page.html"><img src="images/profile.png" width="155" height="35" alt=""></a></li>
	<li id="m3"><a href="../gallery/gallery.php"><img src="images/gallery.png" width="155" height="35" alt=""></a></li>
	</ul>
</div>

<form method="post">
<input type="hidden" name="no" value="NULL">
    <div>
        <label for="name">Name:</label>
        <input type="text" name="name" />
    </div>
    <div>
        <label for="mail">E-mail:</label>
        <input type="email" name="mail" />
    </div>
    <div>
        <label for="msg">Message:</label>
        <textarea name="msg"></textarea>
    </div>

    <div class="button">
        <button type="submit">Send your message</button>
    </div>
</form>


<!-- End Save for Web Slices -->
</body>
</html>

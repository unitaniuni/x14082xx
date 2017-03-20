<?php
//ファンクション読み込み
require_once('func_login.php');

//ログインのチェックファンクション
LogINCheck();
?>
<html>
<head>

<title>top page</title>
<link rel="stylesheet" href="./css/conf1.css" type="text/css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<!-- Save for Web Slices (top2.psd) -->

<div class="home"><a href="index.php"></a></div>

<div class="contact"><a href="contact/contact.php"></div></a>


<div class="mainimg">
<img src="images/mainimg.jpg" width="250" height="167" alt="mainimg">
</div>

<div class="profile"><a href="profile/profile-page.html"></div></a>


<div class="gallery"><a href="gallery/gallery.php"></div></a>


<div class="footer">
<img src="images/footer.gif" width="750" height="27" alt="footer">
</div>
<a href= "logout.php" >logout</a>
<!-- End Save for Web Slices -->
</body>
</html>




<html>
<head>
<title>gallery</title>
<link rel="stylesheet" href="./css/conf1.css" type="text/css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<!-- Save for Web Slices (gallery.psd) -->
<div class="gallery">
<img src="images3/gallery.png" width="342" height="85" alt="">
</div>
<div class="menu">
	<ul>
		<li id="m1"><a href="../index.php"><img src="images3/home.png" width="155" height="35" alt=""></a></li>
		<li id="m2"><a href="../profile/profile-page.html"><img src="images3/profile.png" width="155" height="35" alt=""></a></li>
		<li id="m3"><a href="../contact/contact.php"><img src="images3/contact.png" width="155" height="35" alt=""></a></li>
	</ul>
</div>


<?php
//対象のディレクトリ
$tmp = "";
$dir = dir('photo/');
while(($file_name = $dir->read()) !== false){
	if($file_name!="."&&$file_name!=".."&&$file_name!=".DS_Store"){
		$tmp .= "<img src='photo/" . $file_name . "' width='100'>";
	}
}
?>
<br><br><br><br><br><br>
<?php

  print_r($tmp);

?>
<br><br><br><br><br>
<form method="post" enctype="multipart/form-data" action="gallery_result.php">
<input type="file" name="upfile"><br>
<input type="text" name="img_name" value="----">ファイル名(小文字英数)<br>
<input type="submit" value="Upload">
</form>

<!-- End Save for Web Slices -->
</body>
</html>

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
<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>

<p><a href="gallery.php">画像アップロード</a></p>
<p><pre><?php print_r($tmp);?><pre></p>

</body>
</html>


<?php

    $tmp = "";
    $filename = "photo/".$_POST['img_name'].".jpg";
    if(move_uploaded_file($_FILES['upfile']['tmp_name'],$filename)==true){
        $tmp="アップロード完了<br>";
        $tmp.="<img src='".$filename."' width='300'>";
    }else{
        $tmp="アップロードエラー".$_FILES['upfile']['error'];
    }
?>
<html>
<head>
<a href='gallery.php'>galleryTop</a>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>


<p><?php echo $tmp;?></p>


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
<br><br><br><br><br><br><?php print_r($tmp);?><br><br><br><br><br>

<?php
$db_file_name = "../../contact/x14082.db3";
$field=array('no INTEGER PRIMARY KEY','name','mail','msg');

function DB_Access($SQL_STAT) {
	global $db_file_name;
	try {
		//PDOでDB接続
		$NewPdo = new PDO("sqlite:".$db_file_name);
		//クエリオブジェクト取得
		$QueryObj = $NewPdo->query($SQL_STAT);
		//DB接続解除
		unset($NewPdo);
	} catch (PDOException $e) {
		$QueryObj = "DBError：".$e->getMessage();
	}
	return $QueryObj;
}
//★テーブルの値をすべて取得
function DB_SelectALL($db_name){
	$SQL_STAT = "SELECT * FROM ".$db_name." ORDER BY id DESC";
	return DB_Access($SQL_STAT);
}
//★レコードの指定理を一列取得
function DB_SelectOne($db_name,$get_id){
	$SQL_STAT = "SELECT * FROM ".$db_name." WHERE no=".$get_id.";";
	return DB_Access($SQL_STAT);
}
//★テーブル作成
function DB_CreateTable($db_name){
	global $field;
	$SQL_value="";
	foreach($field as $key =>$val){
		if($SQL_value!=""){
			$SQL_value.=",";
		}
		$SQL_value.=$val;
	}
	$SQL_STAT="CREATE  TABLE ".$db_name." (".$SQL_value.");";
	return DB_Access($SQL_STAT);
}
//★レコードの登録
function DB_Insert($db_name,$post_data){
	unset($post_data["no"]);
	$SQL_key="";
	$SQL_value="";
	foreach($post_data as $key =>$val){
		if($SQL_key!=""){
			$SQL_key.=",";
		}
		$SQL_key.="'".$key."'";
		if($SQL_value!=""){
			$SQL_value.=",";
		}
		$SQL_value.="'".$val."'";
	}
	$SQL_STAT = "INSERT INTO ".$db_name." (".$SQL_key.") VALUES (".$SQL_value.");";
	return DB_Access($SQL_STAT);
}
//★レコードの編集
function DB_Update($db_name,$post_data){
	$SQL_value="";
	foreach ($post_data as $key => $value) {
		if($SQL_value!=""){
			$SQL_value .= ",";
		}
	$SQL_value .= $key."='".$value."'";
	}
	$SQL_STAT = "UPDATE ".$db_name." SET ".$SQL_value." WHERE id=".$post_data["id"].";";
	return DB_Access($SQL_STAT);
}
//★レコードの削除
function DB_Delete($db_name,$post_id){
	$SQL_STAT = "DELETE FROM '".$db_name."' WHERE no='".$post_id."';";
	return DB_Access($SQL_STAT);
}
?>

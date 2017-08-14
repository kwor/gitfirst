<?php
require_once("dbconn.php");
	$uid=$_REQUEST["uid"]?$_REQUEST["uid"]:0;
	$url=$_REQUEST["vurl"]?$_REQUEST["vurl"]:0;
	$now=date('Y-m-d H:i:s');
	$sql = "insert into kvideo (vurl,uid,addtime) VALUES('$url','$uid',now())";
	 
	$res=mysqli_query($dbconn,$sql);
	if($res){
		echo "success";
	}else{
		echo "error";
	}
?>
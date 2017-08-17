<?php
require_once("dbconn.php");
	$uid=$_REQUEST["uid"]?$_REQUEST["uid"]:0;
 
	$shopid=$_REQUEST["shopid"]?$_REQUEST["shopid"]:0;
	 
	$sql = "insert into kshop_collection (uid,shopid,addtime) VALUES('$uid','$shopid',now())";
	 
	$res=mysqli_query($dbconn,$sql);
	if($res){
		echo "success";
	}else{
		echo "error";
	}
?>
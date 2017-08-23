<?php
require_once("dbconn.php");
	$uid=$_REQUEST["uid"]?$_REQUEST["uid"]:0;
 
	$shopid=$_REQUEST["shopid"]?$_REQUEST["shopid"]:0;
	 
	 
	$sql1="select count(*) as num from kshop_collection where uid='$uid' and shopid='$shopid'";
	$res1=mysqli_query($dbconn,$sql1);
	$row1 = mysqli_fetch_array($res1);
	 if($row1["num"]>0){
	 	echo "已经收藏过了";
		
	 }else{
	$sql = "insert into kshop_collection (uid,shopid,addtime) VALUES('$uid','$shopid',now())";
	 
	$res=mysqli_query($dbconn,$sql);
	if($res){
		echo "success";
	}else{
		echo "error";
	}
	 }
?>
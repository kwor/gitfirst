<?php
require_once("dbconn.php");
	$uid=$_REQUEST["uid"]?$_REQUEST["uid"]:0;
	$video=$_REQUEST["video"]?$_REQUEST["video"]:0;
	$shopid=$_REQUEST["shopid"]?$_REQUEST["shopid"]:0;
	 
	$sql = "insert into kshop_video (video,uid,shopid,like_num,addtime) VALUES('$video','$uid','$shopid',0,now())";
	 
	$res=mysqli_query($dbconn,$sql);
	if($res){
		echo "success";
	}else{
		echo "error";
	}
?>
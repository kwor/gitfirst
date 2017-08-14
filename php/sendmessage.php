<?php
	require_once("dbconn.php");
	$uid=$_REQUEST["uid"]?$_REQUEST["uid"]:0;
	$fuid=$_REQUEST["fuid"]?$_REQUEST["fuid"]:0;
	$content=$_REQUEST["content"];
	if($uid!=""&&$fuid!=""){
			$sql = "insert into kfollowing_comment (uid,fuid,content,addtime) 
	                             VALUES('$uid','$fuid','$content',now())";
	$res=mysqli_query($dbconn,$sql);
	if($res){
		echo "success";
	}else{
		echo "error";
	}
	}else{
		echo "异常";
	}

	?>
<?php
	require_once("dbconn.php");
	$uid=$_REQUEST["uid"]?$_REQUEST["uid"]:0;
	$video=$_REQUEST["video"]?$_REQUEST["video"]:0;
	$content=$_REQUEST["content"];
	$fromspaceid=$_REQUEST["fromspaceid"]?$_REQUEST["fromspaceid"]:0;
	if($uid!=""&&$video!=""){
		
 
	$sql = "insert into kfspace_video (uid,video,content,follow_num,addtime,fromspaceid) VALUES('$uid','$video','$content',0,now(),'$fromspaceid')";
		
 
	
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
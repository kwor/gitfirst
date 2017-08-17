<?php
require_once("dbconn.php");
	$uid=$_REQUEST["uid"]?$_REQUEST["uid"]:0;
	$comment=$_REQUEST["content"]?$_REQUEST["content"]:0;
	$spaceid=$_REQUEST["spaceid"]?$_REQUEST["spaceid"]:0;

	 
	$sql = "insert into kfspace_video_comment (spaceid,uid,comment,addtime) VALUES('$spaceid','$uid','$comment',now())";
	 
	$res=mysqli_query($dbconn,$sql);
	if($res){
		
		$sql1="update kfspace_video set comment_num=comment_num+1 where id=".$spaceid;
			$res1=mysqli_query($dbconn,$sql1);
			if($res1){
				echo "success";
			}else{
				echo "comment_num error";
			}
		
		
		
		
	}else{
		echo "error";
	}
?>
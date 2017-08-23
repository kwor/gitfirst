<?php
require_once("dbconn.php");
	$uid=$_REQUEST["uid"]?$_REQUEST["uid"]:0;
	$comment=$_REQUEST["content"]?$_REQUEST["content"]:0;
	$kshop_video_id=$_REQUEST["kshop_video_id"]?$_REQUEST["kshop_video_id"]:0;

	 
	$sql = "insert into kshop_video_comment (kshop_video_id,uid,content,addtime) VALUES('$kshop_video_id','$uid','$comment',now())";
 
	$res=mysqli_query($dbconn,$sql);
	
	if($res){
		
		$sql1="update kshop_video set comment_num=comment_num+1 where id=".$kshop_video_id;
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
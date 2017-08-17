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
		
		if($fromspaceid!=0){
			$sql1="update kfspace_video set follow_num=follow_num+1 where id=".$fromspaceid;
			$res1=mysqli_query($dbconn,$sql1);
			if($res1){
				echo "success";
			}else{
				echo "update num error";
			}
		}else{
			echo "success";
		}
		
		
	}else{
		echo "error";
	}
	}else{
		echo "异常";
	}

	?>
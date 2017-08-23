<?php
require_once("dbconn.php");

	$uid=$_REQUEST["uid"]?$_REQUEST["uid"]:0;
	$followid=$_REQUEST["followid"]?$_REQUEST["followid"]:0;
	
	if($uid==$followid){
		echo "不可关注自己";
	}else{
	$sql1="select count(*) as num from kfollow where uid='$uid' and followuid='$followid'";

	$res1=mysqli_query($dbconn,$sql1);
	$row1 = mysqli_fetch_array($res1);
   
   
	 if($row1["num"]>0){
	 	echo "已经关注过了";
		
	 }else{
	 	
		$sql = "insert into kfollow (uid,followuid,addtime) VALUES('$uid','$followid',now())";
	 
	    $res=mysqli_query($dbconn,$sql);
	    if($res){
		    echo "success";
	    }else{
		    echo "error";
	    }
	  }
	}
?>
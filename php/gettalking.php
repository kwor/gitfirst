<?php
	require_once("dbconn.php");
	$uid=$_REQUEST["uid"]?$_REQUEST["uid"]:0;
	$fuid=$_REQUEST["fuid"]?$_REQUEST["fuid"]:0;
	$sql="select * from kfollowing_comment where uid in ('$uid','$fuid') and fuid in ('$uid','$fuid') order by addtime asc";
 
	$query=mysqli_query($dbconn,$sql);
	
	//echo json_encode(mysqli_fetch_array($query));
	 
	$a=array();
    $i=0;
	
	while ($row = mysqli_fetch_array($query)){
		$i=$i+1;
        $a[$i]=array($row[uid],$row[fuid],$row[content]);

	}
	 
	echo json_encode($a);
	 //*/
?>
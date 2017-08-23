<?php
	require_once("dbconn.php");
	$uid=$_REQUEST["uid"]?$_REQUEST["uid"]:0;
	$sql="select * from kfollowing as kf left join firstbite_user as u on kf.followuid=u.user_id where kf.uid='$uid' order by kf.addtime desc";
 
	$query=mysqli_query($dbconn,$sql);
	
	//echo json_encode(mysqli_fetch_array($query));
	 
	$a=array();
    $i=0;
	
	while ($row = mysqli_fetch_array($query)){
		$i=$i+1;
        $a[$i]=array($row[user_id],$row[user_name],$row[user_phone]);

	}
	 
	echo json_encode($a);
	 //*/
?>
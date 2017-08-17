<?php
	require_once("dbconn.php");
	$spaceid=$_REQUEST["spaceid"]?$_REQUEST["spaceid"]:0;
	$sql="select * from kfspace_video_comment as kc left join firstbite_user as u on kc.uid=u.user_id where kc.spaceid=".$spaceid;
 
	$query=mysqli_query($dbconn,$sql);
	
	//echo json_encode(mysqli_fetch_array($query));
	 
	$a=array();
    $i=0;
	
	while ($row = mysqli_fetch_array($query)){
		$i=$i+1;
        $a[$i]=array($row[addtime],$row[comment],$row[user_name]);

	}
	 
	echo json_encode($a);
	 //*/
?>
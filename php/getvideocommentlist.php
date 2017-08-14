<?php
	require_once("dbconn.php");
	$vid=$_REQUEST["vid"]?$_REQUEST["vid"]:0;
	$sql="select * from kshop_video_comment where kshop_video_id=".$vid;
 
	$query=mysqli_query($dbconn,$sql);
	
	$a=array();
    $i=0;
	
	while ($row = mysqli_fetch_array($query)){
		$i=$i+1;
        $a[$i]=array($row[id],$row[content],$row[addtime]);

	}
	 
	echo json_encode($a);
	 //*/
?>
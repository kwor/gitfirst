<?php
	require_once("dbconn.php");
	$uid=$_REQUEST["uid"]?$_REQUEST["uid"]:0;
	$sql="select * from kvideo where uid='$uid' order by id desc";
 
	$query=mysqli_query($dbconn,$sql);
	
	//echo json_encode(mysqli_fetch_array($query));
	 
	$a=array();
    $i=0;
	
	while ($row = mysqli_fetch_array($query)){
		$i=$i+1;
        $a[$i]=array($row[id],$row[vurl]);

	}
	 
	echo json_encode($a);
	 //*/
?>
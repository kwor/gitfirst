<?php
	require_once("dbconn.php");
 
	$sql="select * from kshop order by id desc";
 
	$query=mysqli_query($dbconn,$sql);
	
	$a=array();
    $i=0;
	
	while ($row = mysqli_fetch_array($query)){
		$i=$i+1;
		$sql1="select * from kshop_video where uid=".$row[id]." order by id desc limit 1";
		$query1=mysqli_query($dbconn,$sql1);
		$row1 = mysqli_fetch_array($query1);
        $a[$i]=array($row[id],$row[name],$row[type],$row1[video]);

	}
	 
	echo json_encode($a);
	 //*/
?>
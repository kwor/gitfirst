<?php
require_once("dbconn.php");
	$shopid=$_REQUEST["shopid"]?$_REQUEST["shopid"]:0;

    $sqlu = "select * from kshop_video where shopid='$shopid'";
	$query=mysqli_query($dbconn,$sqlu);
	 

    $a=array();
    $i=0;
	
	while ($row = mysqli_fetch_array($query)){
		$i=$i+1;
        $a[$i]=array($row[id],$row[like_num],$row[video]);

	}
	 
	echo json_encode($a);
	
?>
<?php
	require_once("dbconn.php");
    $shopname=$_REQUEST["shopname"]?$_REQUEST["shopname"]:"";
	if($shopname==""){
		$sql="select * from kshop order by id desc";
	}else{
		$sql="select * from kshop where name like '%{$shopname}%' order by id desc";
	}
	
 
	$query=mysqli_query($dbconn,$sql);
	
	$a=array();
    $i=0;
	
	while ($row = mysqli_fetch_array($query)){
		$i=$i+1;
		$sql1="select * from kshop_video where shopid=".$row[id]." order by id desc limit 1";
		
		
		$query1=mysqli_query($dbconn,$sql1);
		$row1 = mysqli_fetch_array($query1);
        $a[$i]=array($row[id],$row[name],$row[type],$row1[video],$row[num],$row1[topimg]);

	}
	 
	echo json_encode($a);
	 //*/
?>
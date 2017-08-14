<?php
	require_once("dbconn.php");
	$uid=$_REQUEST["uid"]?$_REQUEST["uid"]:0;
	$fuid=$_REQUEST["fuid"]?$_REQUEST["fuid"]:0;
	$mnum=$_REQUEST["messagenum"]?$_REQUEST["messagenum"]:0;
	$sql="select count(*) as messnum from kfollowing_comment where uid='$uid' and fuid='$fuid'";
	$query=mysqli_query($dbconn,$sql);
	$row = mysqli_fetch_array($query);
	if($row[messnum]>$mnum){
	
	$num= $row[messnum]-$mnum;
	$sql2="select * from kfollowing_comment where uid='$uid' and fuid='$fuid' order by id desc limit ".$num;

	$query2=mysqli_query($dbconn,$sql2);
	$a=array();
    $i=0;
	while ($row2 = mysqli_fetch_array($query2)){
		$i=$i+1;
        $a[0][$i]=array($row2[uid],$row2[fuid],$row2[content]);
        
	}
	$a[num]=$num;
	echo json_encode($a);
		
	}else{
		
		$a[num]=0;
		echo json_encode($a);
	}
	
	?>
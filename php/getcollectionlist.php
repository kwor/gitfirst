<?php
	require_once("dbconn.php");
	$uid=$_REQUEST["uid"]?$_REQUEST["uid"]:"";
	$sql="select ks.id as ksid,ks.name as shopname,kc.addtime as kaddtime from kshop_collection as kc left join kshop as ks on kc.shopid=ks.id where kc.uid='$uid'";
 
	$query=mysqli_query($dbconn,$sql);
	
	//echo json_encode(mysqli_fetch_array($query));
	 
	$a=array();
    $i=0;
	
	while ($row = mysqli_fetch_array($query)){
		$i=$i+1;
        $a[$i]=array($row[kaddtime],$row[shopname],$row[ksid]);

	}
	 
	echo json_encode($a);
	 //*/
?>
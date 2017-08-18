<?php
    require_once("dbconn.php");
    $name=$_REQUEST["name"]?$_REQUEST["name"]:"";
	$sql="select * from firstbite_user where user_name like '%{$name}%'";
	$res=mysqli_query($dbconn,$sql);
	
	$a=array();
    $i=0;
	
	while ($row = mysqli_fetch_array($res)){
		$i=$i+1;
        $a[$i]=array($row[user_id],$row[user_name],$row[user_phone]);

	}
	 
	echo json_encode($a);
	 //*/
?>
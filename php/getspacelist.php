<?php
	require_once("dbconn.php");
	$uid=$_REQUEST["uid"]?$_REQUEST["uid"]:0;
	$tp=$_REQUEST["tp"]?$_REQUEST["tp"]:0;
	if($tp==0){
     $sql="select *,kf.addtime as kaddtime from kfspace_video as kf left join firstbite_user as u on kf.uid=u.user_id order by kf.addtime desc";
		
	}else{
	 $sql="select *,kf.addtime as kaddtime from kfspace_video as kf left join firstbite_user as u on kf.uid=u.user_id where kf.uid='$uid' order by kf.addtime asc";
		
		
	}
 
	$query=mysqli_query($dbconn,$sql);
	
	$a=array();
    $i=0;
	
	while ($row = mysqli_fetch_array($query)){
		$i=$i+1;
        $a[$i]=array($row[user_name],$row[kaddtime],$row[follow_num],$row[content],$row[video]);

	}
	 
	echo json_encode($a);
	 //*/
?>
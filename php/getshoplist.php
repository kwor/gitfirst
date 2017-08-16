<?php
require_once("dbconn.php");
    $sqlu = "select * from kshop";
	$query=mysqli_query($dbconn,$sqlu);
	 
    $a=array();
    $i=0;
	
	while ($row = mysqli_fetch_array($query)){
		$i=$i+1;
        $a[$i]=array($row[id],$row[name]);

	}
	 
	echo json_encode($a);
	
?>
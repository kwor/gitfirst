<?php
require_once("dbconn.php");
	$vid=$_REQUEST["vid"]?$_REQUEST["vid"]:0;

    $sqlu = "select * from kshop_video where id='$vid'";
	$resu=mysqli_query($dbconn,$sqlu);
	$rowu = mysqli_fetch_array($resu);

	echo json_encode($rowu);
	
?>
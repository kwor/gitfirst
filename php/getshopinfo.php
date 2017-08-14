<?php
require_once("dbconn.php");
	$shopid=$_REQUEST["shopid"]?$_REQUEST["shopid"]:0;

    $sqlu = "select * from kshop where id='$shopid'";
	$resu=mysqli_query($dbconn,$sqlu);
	$rowu = mysqli_fetch_array($resu);

	echo json_encode($rowu);
	
?>
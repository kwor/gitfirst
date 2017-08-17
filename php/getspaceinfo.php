<?php
require_once("dbconn.php");
	$id=$_REQUEST["id"]?$_REQUEST["id"]:0;

    $sqlu = "select * from kfspace_video where id='$id'";
	$resu=mysqli_query($dbconn,$sqlu);
	$rowu = mysqli_fetch_array($resu);

	echo json_encode($rowu);
?>
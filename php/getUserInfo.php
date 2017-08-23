<?php
$callback = isset($_GET['callback']) ? trim($_GET['callback']) : ''; //jsonp回调参数，必需
$user_id=$_REQUEST["user_id"];
$name_arr = array();
switch($user_id){
	case "1" :
		$name="Name1";
		$time="2017-04-29";
		break;
	
	case "2" :
		$name="Name2";
		$time="2017-05-29";
		break;
		
	case "3" :
		$name="Name3";
		$time="2017-06-29";
		break;
		
	case "4" :
		$name="Name4";
		$time="2017-07-29";
		break;
}
$name_arr["name"]=$name;
$name_arr["time"]=$time;
$tmp=json_encode($name_arr);
echo $callback . '(' . $tmp .')';  //返回格式，必需

?>
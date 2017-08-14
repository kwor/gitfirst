<?php
require_once("dbconn.php");
date_default_timezone_set('Asia/Shanghai');
$login_date=date("Y-m-d H:i:s",time());
$callback = isset($_GET['callback']) ? trim($_GET['callback']) : ''; //jsonp回调参数，必需
$sign_arr = array();

$login_type=$_REQUEST["login_type"];

switch($login_type){
	case "sign_in" : 
		$user_name=$_REQUEST["user_name"];
		$user_password=md5($_REQUEST["user_password"]);
		$user_info_sql="select * from firstbite_user where user_name='$user_name'";
		$user_info_res=mysqli_query($dbconn,$user_info_sql);
		$user_info=mysqli_fetch_array($user_info_res);
		//echo mysqli_error();
		//echo $user_info_sql;
		//print_r($user_info);
		if(isset($user_info)){
			if($user_password == $user_info["user_password"]){
				//echo "Login Succeed";
				$return_code = "001";}
			}else{
				// Wrong Password
				$return_code = "002";;
			}
		//print_r($user_info);
		}else{
			//Not Exsit
			$return_code = "003";;
		}
		break;
	case "sign_up" :
		$user_name=$_REQUEST["user_name"];
		$user_password=md5($_REQUEST["user_password"]);
		$user_email=$_REQUEST["user_email"];
		$user_info_sql="select * from firstbite_user where user_name='$user_name'";
		$user_info_res=mysqli_query($dbconn,$user_info_sql);
		$user_info=mysqli_fetch_array($user_info_res);
		if(isset($user_info)){
			//Already Exsit
			$return_code = "102";
		}
		else{
			$random=time()."_".rand(0,12345); 
			$user_rigist_sql="INSERT INTO firstbite_user(user_type, user_id,user_name, user_password, user_email,user_phone,Remark) VALUES ('1','$random','$user_name','$user_password','$user_email','null','null')";
			$user_rigist_res=mysqli_query($dbconn,$user_rigist_sql);
			if($user_rigist_res){
				//Sign Up Succefully
				 $return_code = "101";;
			}
			else{
				//Insert Failed
				$return_code = "103";
			}
		}
		//echo "sign up";
		break;
		
	default:
		$user_email=$_REQUEST["in-email"];
		$user_password=$_REQUEST["in-password"];
		//echo "sign in";
		break;
	}
	
$sign_arr["return_code"]=$return_code;
$tmp=json_encode($sign_arr);
echo $callback . '(' . $tmp .')';  //返回格式，必需

?>
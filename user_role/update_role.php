<?php
require '../../connect.php';



	$id=$_REQUEST['get_id'];
	$emp_id=$_REQUEST['emp_id'];
	$role=$_REQUEST['code'];
	$user_name=$_REQUEST['user_name'];
	$password=md5($_REQUEST['password']);
	$mail_id=$_REQUEST['mail_id'];
	$mail_password=$_REQUEST['mail_password'];
	
	$sel=$con->query("select * from z_role_master where id='$role'");
$rfet=$sel->fetch();
$role_code=$rfet['code'];	
	
	$sql=$con->query("update user_role_mapping set rolemaster_id='$role' where id='$id'");
	$sql1=$con->query("update z_user_master set user_group_code='$role_code',user_name='$user_name',password='$password',email_id='$mail_id',mail_password='$mail_password' where candidate_id='$emp_id'");
	
	//echo "update z_user_master set user_name='$user_name',password='$password', where candidate_id='$emp_id'";
	

?>

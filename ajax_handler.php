<?php
session_start();
require_once "class/model.php";
$_SESSION['mySqlClass'] = new MySQLTables();

/* enable some easy logging for debugging */
$src = "ajax_handler.php";
error_log($src." request received,".$_POST['user']);
/* dummy array of existing user names */
$user_mail_list = array("me@me.com","alf@ggg.in");
if(isset($_POST['email'])){
	$email = $_POST['email'];
	/* check if user already exists in array */
	if(in_array($email, $user_mail_list)==1) {
		echo trim("false"); //return false if user in array
	}
	else 
		echo trim("true"); 
}
else if (isset($_POST['offset']) && isset($_POST['limit'])){
	//error_log("received AJAX request for customer data: ".$_POST['limit'].",".$_POST['offset']);
	$data = $_SESSION['mySqlClass']->getCustomers(intval($_POST['limit']), intval($_POST['offset']));
	//	error_log("got a lot of bytes?: ".strlen($data));
	echo trim($data);
}
else {
  die;
}
?>
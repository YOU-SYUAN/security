<?php
session_start();
require("dbconnect.php");
require("userModel.php");
$uid = $_GET['uid'];
$account = $_POST['account'];
$passWord = $_POST['password'];
//$result=getUserId($account, $uid);
//while (	$rs=mysqli_fetch_assoc($result)) {
//	$uid=$rs['uid'];
//}

if (checkUserIDPwd($account, $passWord)) {
	$_SESSION['account'] = $account;
	//$_SESSION['uid'] = $uid;
	//getUserId($account);
	header("Location: firstview.php?account=$account");
} else {
	$_SESSION['account']="";
	header("Location: loginForm.php");
}
?>

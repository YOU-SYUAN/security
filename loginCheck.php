<?php
session_start();
require("userModel.php");
$userName = $_POST['account'];
$passWord = $_POST['password'];
$result=getUserId();
while (	$rs=mysqli_fetch_assoc($result)) {
	$uid=$rs['uid'];
}

if (checkUserIDPwd($userName, $passWord)) {
	$_SESSION['account'] = $userName;
	header("Location: firstview.php?uid=$uid");
} else {
	$_SESSION['account']="";
	header("Location: loginForm.php");
}
?>

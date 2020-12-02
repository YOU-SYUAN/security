<?php
session_start();
require("userModel.php");

$userName = $_POST['account'];
$passWord = $_POST['password'];

if (checkUserIDPwd($userName, $passWord)) {
	$_SESSION['account'] = $userName;
	header("Location: firstview.php");
} else {
	$_SESSION['account']="";
	header("Location: firstview.php");
}
?>

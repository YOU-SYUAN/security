<?php
session_start();
require("userModel.php");

$userName = $_POST['account'];
$passWord = $_POST['pwd'];

if (checkUserIDPwd($userName, $passWord)) {
	$_SESSION['account'] = $userName;
	header("Location: todoListView.php");
} else {
	$_SESSION['account']="";
	header("Location: loginForm.php");
}
?>

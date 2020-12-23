<?php
session_start();
//if (! isset($_SESSION['uID']) or $_SESSION['uID']!="boss") {
//	header("Location: loginForm.php");
//} 

//require("todoModel.php");

//$id = (int)$_GET['id'];


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
</head>
<body>
<h1>註冊帳號</h1>
<form method="post" action="addaccount.php">
<table width="300" border="5">
	  <!-- <input type='hidden' name='uid' > -->
      <tr><td> name </td><td><input name="name" type="text" id="name" /> </td></tr>
      <tr><td>account </td><td><input name="account" type="text" id="account" /> </td></tr>
      <tr><td>password </td><td><input name="password" type="password" id="password" /> </td></tr>
      <tr><td>phone </td><td><input name="phone" type="text" id="phone" /> </td></tr>
	  
      <td><input type="submit" name="Submit" value="註冊" /></td>
  </table>
	</form>
  </tr>
<a href="loginForm.php"> HOME </a>
</body>
</html>
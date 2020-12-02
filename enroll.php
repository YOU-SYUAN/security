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
	  <!-- <input type='hidden' name='uid' > -->
      name: <input name="name" type="text" id="name" /> <br>
      account: <input name="account" type="text" id="account" /> <br>
      passord: <input name="password" type="password" id="password" /> <br>
      phone: <input name="phone" type="text" id="phone" /> <br>
	  
      <input type="submit" name="Submit" value="註冊" />
	</form>
  </tr>
</body>
</html>
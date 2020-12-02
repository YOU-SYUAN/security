<?php
session_start();
if (! isset($_SESSION['account']) or $_SESSION['account']<="") {
	header("Location: loginForm.php");
} 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
</head>

<body>

<h1>Every one can be a millionare</h1>
<hr />
<a href="loginForm.php">login</a>
<?php
echo "<a href='Addtisk.php?id=-1'>下注</a>";
echo "<a href='Addtisk.php?id=-1'>參加</a>";
?>
</body>
</head>
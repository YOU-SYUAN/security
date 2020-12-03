<?php
session_start();
if (! isset($_SESSION['account']) or $_SESSION['account']<="") {
	header("Location: loginForm.php");
} 
$uid = $_GET['uid'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
<style type="text/css">
#bet {
width: 120px;
height: 60px;
font-size:24px;
font-family: 微軟正黑體;
border: 3px normal;
background-color: ivory;
}
#join {
width: 120px;
height: 60px;
font-size:24px;
font-family: 微軟正黑體;
border: 3px normal;
background-color: ivory;
}
</style>
</head>

<body>
<h1 align="center">Every one can be a millionare</h1>
<hr />
<div id = "btns" align="center">
<button id = "bet" onclick="location.href='rule.php'">下注</button> <br>
<button id = "join">參加</button> 
</div>
<?php
//echo "<a href='playgame.php'>下注</a><br>";
//echo "<a href='Addtisk.php?id=-1'>參加</a>";
?>
</body>
</head>
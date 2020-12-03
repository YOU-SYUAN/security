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
<style type="text/css">
#rule {
    width:600px;
    height:350px;
    margin: auto;
    background-color: lightblue;
}
#start {
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
<h1 align="center">下注規則</h1>
<hr />
<div id = "rule" align="center">
這邊是我們的下注規則!!!!!
</div><br>
<div id = "btns" align="center">
<button id = "start" onclick="location.href='betForm.php'">Start</button> 
</div>

</body>
</head>
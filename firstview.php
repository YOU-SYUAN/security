<?php
session_start();
if (! isset($_SESSION['account']) or $_SESSION['account']<="") {
	header("Location: loginForm.php");
} 
$account = $_GET['account'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>首頁-大樂透</title>
<style type="text/css">
body {
	background-color: gainsboro;
}
#bet {
width: 120px;
height: 60px;
font-size:24px;
font-family: 微軟正黑體;
border: 5px double grey;
background-color: ivory;
}
#join {
width: 120px;
height: 60px;
font-size:24px;
font-family: 微軟正黑體;
border: 5px double grey;
background-color: ivory;
}
</style>
</head>

<body>
<h1 align="center" font-color="chocolate">Every one can be a millionare</h1>
<hr />
<div id = "btns" align="center">
<a href='rule.php?account=<?php echo $account ?>'>
<button id = "bet" onclick="location.href='rule.php'">下注</button> </a><br>
<a href='joinForm.php?account=<?php echo $account ?>'>
<button id = "join" >參加</button></a>
</div>
<?php
//echo "<a href='rule.php'>下注</a><br>";
//echo "<a href='joinForm.php?uid=$uid'>參加</a>";
?>
</body>
</head>
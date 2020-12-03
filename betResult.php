<?php
session_start();
if (! isset($_SESSION['account']) or $_SESSION['account']<="") {
	header("Location: loginForm.php");
} 
require("dbconnect.php");
$sql = "select * from record ;";
$result=mysqli_query($conn,$sql) or die("DB Error: Cannot retrieve message.");
$rs=mysqli_fetch_assoc($result)

// $sql = "select "
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>lottery</title>
</head>
<body>
<h1>下注表單</h1>
<table id = bet width="300" border="5">
<form method="post" action="resultControl.php">
    <tr><td>下注編號</td><td> <?php echo $rs['id'] ?></td>

    <tr><td>期數 : </td></tr>
    
    開獎時間 : </br>

    目前累積獎金 : </br>

    下注號碼 : <?php echo $rs['num'] ?></br>

    下注金額 : <?php echo $rs['price'] ?></br>

    <button id = "home" onclick="location.href='firstview.php'">Home</button> 
</form>
</tr>
</table>
</body>
</html>

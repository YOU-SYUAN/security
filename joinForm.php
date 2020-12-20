<?php
session_start();
if (! isset($_SESSION['account']) or $_SESSION['account']<="") {
	header("Location: loginForm.php");
} 
require("dbconnect.php");
$account = $_GET['account'];
$sql = "select * from user,record where user.account = record.account and user.account='$account' ;";
$result=mysqli_query($conn,$sql) or die("DB Error: Cannot retrieve message.");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>參加開獎-大樂透</title>
<style type="text/css">
body {
	background-color: whitesmoke;
}
</style>
<script type="text/javascript">
function updatestate() {
    $sql = "update record set status= 1 ;";
    $result=mysqli_query($conn,$sql) or die("DB Error: Cannot retrieve message.");
}
/*document.getElementById("bt").addEventListener("click",function(){
    swal({
        title:"確定要參加?",
        icon:"waring",
        buttons:true,
    });
});*/

</script>
</head>

<body>
<h1 align="center">參加遊戲</h1>
<hr />
<table width="500" border="1" align="center">
<tr>
    <td>彩券編號</td>
    <td>下注帳號</td>
    <td>下注週期</td>
    <td>下注金額</td>
    <td>下注號碼</td>
    <td>status</td>
	<td>確認參加</td>
</tr>
<?php
while (	$rs=mysqli_fetch_assoc($result)) {
    echo "<tr><td>" . $rs['id'] . "</td>";
	echo "<td>" . $rs['account'] . "</td>";
	echo "<td>{$rs['period']}</td>";
    //echo "<td>" , htmlspecialchars($rs['period']), "</td>";
    echo "<td>" , htmlspecialchars($rs['price']), "</td>";
    echo "<td>{$rs['num']}</td>" ;
    echo "<td> {$rs['status']}</td>";
    //echo "<td><a href='setstatus.php'>Agree</a></td>";
    //echo "<td><input type="button" id ="confirm" value="參加" onclick="updatestatus()"></td>";
    echo "<td><button id='confirm' onclick='update.php'>確認</button></td>";
    //echo "<td>{$rs['status']}</td>" ;
	//echo "<td>" , htmlspecialchars($rs['price']), "</td>";
    //echo "<td>{$jobStatus[$rs['status']]}</td><td>";
}
//header("Location: todoListView.php?m=$msg");
?>
<?php 
function change() {
    $sql = "update record set status = 1; ";
}
?>
</table>

<div id = "btns" align="center">

</div>

</body>
</head>
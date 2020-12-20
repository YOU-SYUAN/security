<?php
session_start();
if (! isset($_SESSION['account']) or $_SESSION['account']<="") {
	header("Location: loginForm.php");
} 
require("dbconnect.php");
$account = $_GET['account'];
$sql = "select * from user,record where user.account = record.account and user.account='$account';";
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
#CONFIRM {
display:none;
background-color:silver;
width: 400px;
height: 200px;
position: absolute;
top: 50%;
left: 50%;
margin: -150px 0 0 -250px;
border:3px double snow;
}
#sure2 {
width:60px;
height:30px;
font-size:16px;
background-color:grey;
border-radius:12px;
margin:80px 0 0 120px;
border:2px double gray;
}
#cancel2 {
width:60px;
height:30px;
font-size:16px;
background-color:grey;
border-radius:12px;
margin:80px 0 0 50px;
border:2px double gray;
}
</style>
<script type="text/javascript">
var ww = window.innerWidth; 
var hh = window.innerHeight; 
/*window.onload=function() {
    $("confirm").onclick = updatestate;
    console.log(ww);
    console.log(hh);
};*/
function updatestate() {
    $("CONFIRM").style.display = "block";
}
function hide() {
    $("CONFIRM").style.display = "none";
}
/*function go() {
    global $conn;
    $sql= "update record set status = 1;"
    mysqli_query($conn,$sql) or die("Insert failed, SQL query");
}*/
/*document.getElementById("bt").addEventListener("click",function(){
    swal({
        title:"確定要參加?",
        icon:"waring",
        buttons:true,
    });
});*/
function $(id) {
   return document.getElementById(id);
}
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
    echo "<td><input type='button' id ='confirm' value='參加' onclick='updatestate()'></td>";
    //echo "<td><button onclick="">確認</button></td>";
}
//header("Location: todoListView.php?m=$msg");
?>
</table>

<?php
$sql_3 = "select * from user,record where user.account = record.account and user.account='$account';";
$result=mysqli_query($conn,$sql_3) or die("DB Error: Cannot retrieve message.");
$rs=mysqli_fetch_assoc($result);
$id = $rs['id'];
?>

<div id="CONFIRM">
<p align="center" style="color:white">確定要參加嗎?</p>
<a href='update.php?id=<?php echo $id ?>&account=<?php echo $account?>'>
<button id="sure2" onclick ="location.href='update.php'">確定</button></a>
<button id="cancel2" onclick="hide()">取消</button>
</div>

</body>
</head>
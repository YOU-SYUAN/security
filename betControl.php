<?php
require("dbconnect.php");
$account=$_GET['account'];
$period=mysqli_real_escape_string($conn,$_POST['period']);
$num=mysqli_real_escape_string($conn,$_POST['num']);
$price=mysqli_real_escape_string($conn,$_POST['price']);
$key=mysqli_real_escape_string($conn,$_POST['key']);
if ($key) { //if key is not empty
	$sql = "insert into record (account,period, num, price) values ('$account', '$period', '$num', '$price') ;";
	$sql_2 = "update lottery_list set bonus='$price'+bonus where period = '$period';";
	mysqli_query($conn, $sql) or die("Insert failed, SQL query error");
	mysqli_query($conn, $sql_2) or die("Update failed, SQL query error");
} else {
	$msg = "key cannot be empty <br>";
}
$sql_3 = "select * from record order by id DESC;";
$result=mysqli_query($conn,$sql_3) or die("DB Error: Cannot retrieve message.");
$rs=mysqli_fetch_assoc($result);
$newID = $rs['id'];
header("Location:betResult.php?account=$account&rid=$newID");

?>
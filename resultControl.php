<?php
require("dbconnect.php");
$id=mysqli_real_escape_string($conn,$_POST['id']);
$period=mysqli_real_escape_string($conn,$_POST['period']);
$showdate=mysqli_real_escape_string($conn,$_POST['showDate']);
$bonus=mysqli_real_escape_string($conn,$_POST['bonus']);
$num=mysqli_real_escape_string($conn,$_POST['num']);
$price=mysqli_real_escape_string($conn,$_POST['price']);

if ($key) { //if title is not empty
	$sql = "update lottery_list set lottery_list ;";
	mysqli_query($conn, $sql) or die("Insert failed, SQL query error"); //執行SQL
} else {
	$msg = "key cannot be empty <br>";
}

?>
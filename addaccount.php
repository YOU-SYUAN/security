<?php
require("dbconnect.php");
//$id=(int)$_POST['id'];
$name=mysqli_real_escape_string($conn,$_POST['name']);
$account=mysqli_real_escape_string($conn,$_POST['account']);
$password=mysqli_real_escape_string($conn,$_POST['password']);
$phone=mysqli_real_escape_string($conn,$_POST['phone']);
//$exreslut=mysqli_real_escape_string($conn,$_POST['exresult']);
//$commit=mysqli_real_escape_string($conn,$_POST['commit']);

if ($account) { //if title is not empty
    $sql = "insert into user (name, account, password, phone) values ('$name', '$account', '$password', '$phone');";
    mysqli_query($conn, $sql) or die("Insert failed, SQL query");
    //updateJob($id, $stuid, $contact, $famstatus, $content);
	//$msg="Updateded";
} else {
	$msg= "Message stuid cannot be empty";
}
header("Location: loginForm.php?m=$msg");
?>
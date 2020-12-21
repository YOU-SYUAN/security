<?php
require("dbconnect.php");
$account = $_GET['account'];
$id = $_GET['id'];
//echo $id;
$sql = "update record set status=1 where id=$id;";
mysqli_query($conn, $sql) or die("Insert failed, SQL query error"); //執行SQL

header("Location: joinForm.php?account=$account");
?>
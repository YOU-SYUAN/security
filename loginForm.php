<?php
session_start();
//set the login mark to empty
$_SESSION['account'] = "";
?>
<h1>Login Form</h1><hr />
<form method="post" action="loginCheck.php">
Account  : <input type="text" name="account"><br />
Password : <input type="password" name="password"><br />
<input type="submit">
</form>

<a href='getUserPassword.php'>忘記密碼</a>
<a href='enroll.php?uid=-1'>註冊</a>
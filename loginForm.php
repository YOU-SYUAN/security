<?php
session_start();
//set the login mark to empty
$_SESSION['account'] = "";
?>
<h1>Login Form</h1><hr />
<form method="post" action="loginCheck.php">
account  : <input type="text" name="account"><br />
Password : <input type="password" name="pwd"><br />
<input type="submit">
</form>

<a href='getUserPassword.php'>Tell me passwords</A>
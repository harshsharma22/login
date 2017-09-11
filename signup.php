<?php 
session_start();
 ?>

<form method="POST"  action="login.php">
<input name="ema" type="email" id="ema" value="email">
<input name="nam" type="text" id="nam" value="name">
<input name="pass" type="password" id="pass" value="password">

<input name="sub" type="submit" id="sub" value="login">
</form>
<form action="register.php" method="POST">
<input type="text" name="name" id="name" value="name">
<input type="email" name="email" id="email" value="email">
<input type="password" name="password" id="password" value="password">
<input name="regi" type="submit" id="regi" value="register">


</form>
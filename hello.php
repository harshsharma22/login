<?php

session_start();
echo "hello".$_SESSION['user'];

?>

<a href="logout.php">logout</a>
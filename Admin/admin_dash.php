<?php
session_start();
$name=$_SESSION['u_name'];

echo $name;
?>


<?php 

session_start();

session_unset();

session_destroy();

header("Location:./login.php");
?>
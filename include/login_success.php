<?php
session_start();
$email=$_POST['email'];
$_SESSION['user']=$email;
echo "<script>window.open('../about.php','_self')</script>";

?>
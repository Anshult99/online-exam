<?php 

session_start();
session_unset();
session_destroy();
// header("location:Adminlogin.php?msg=successfully");
 header("location:http://localhost/online-exam/Adminlogin.php");

?>
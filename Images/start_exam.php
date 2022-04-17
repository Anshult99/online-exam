<?php
session_start();
$email = $_SESSION['uname'];

//if($email == ""){
    //header("location:index.php?Please Login");
//}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Start Exam</title>
</head>
<body>
<center><h1><?php"Welcome $email"?></h1></center>
<form action="submit.php" method="post">
	<table border="1" width="100%">

<?php
$cont=1;
$con=mysqli_connect("127.0.0.1","root","","onlineexam");
$sql="select from  quest_mastar";
$qury= mysqli_query($con,$sql);





?>


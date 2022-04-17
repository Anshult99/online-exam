1<?php
$con= mysqli_connect("localhost","root","","online_exam");
	$user = $_REQUEST['user'];
$pass = $_REQUEST['pass'];
session_start();
$_SESSION['uname'] = $user;
$_SEESION['admin']= $user;


if (isset($_POST['submit'])) {

$sql= "select * from login where uname='$user' and password='$pass' and Member='member'";
$query=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($query);

if (($user==$row['uname'] && $pass==$row['password']) && $row['Member']=='member')
{
	header("location:Student.php?msg=welcome student");
}
elseif ($user=="admin" && $pass=="admin") 
{

	header("location:AdminHome.php?msg=welcome admin");
	
}
 else 
 {
	header("location:index.php?msg=first register");
}
}











  ?>
<?php 
session_start();
if (isset($_REQUEST['submit'])) {
	$uname= $_REQUEST['user'];
	$upass= $_REQUEST['pswd'];
	
$conn= mysqli_connect("localhost" ,"root" ,"" ,"online_exam") or die("not connected");
$_SESSION['student']=$uname;
 $sql= "select * from stu_reg where email='$uname' and pswrd='$upass'";
$qry=mysqli_query($conn,$sql);
if( $row= mysqli_fetch_assoc($qry));{
	$un= $row['email'];
	$up= $row['pswrd'];

	if ($uname==$un and $upass==$up) {
		header("location:http://localhost/online-exam/Student.php");
	}
	else{
	echo "<script> alert('your password and email does not exist. please signup first')</script>";
	header("location:http://localhost/online-exam/userlogin.php");
}

}
	
}

 ?>
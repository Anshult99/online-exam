<?php
session_start();
 $sk = $_SESSION['uname'];
$con=mysqli_connect("127.0.0.1","root","","onlineexam") or die("not connected");
$email = $_POST['name'];
$sname = $_POST['email'];
$dob = $_POST['dob'];
$addres = $_POST['add'];
$city = $_POST['city'];
$state = $_POST['state'];
$pin = $_POST['pin'];
$fone=$_POST['contact'];
	
$sql1="update reg_data set uname='$email, sname='$sname', dob='$dob', add='$addres', city='$city', state='$state', pin='$pin',fone='$fone' where uname='$sk'";
$qury=mysqli_query($con,$sql1);
if ($qury) {
echo "1";
}
else  {
echo "0";

}





?>
<?php 
session_start();
if (isset($_POST['submit'])) {
$conn=mysqli_connect("localhost","root","","online_exam") or die("unsuccesfully");
echo $stu=$_SESSION['student1'];
$oldpass=$_POST['pswd'];
$npswd=$_POST['npswd'];
$cpswd=$_POST['cpswd'];
$sql="select * from adminlogin where email='$stu'";
$qry=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($qry)){
    $ps=$row['pass']; 
    if ($oldpass==$ps) {
        if ($npswd==$cpswd) {
            $sql1="UPDATE adminlogin SET pass='$cpswd' where email='$stu'";
            $qry1=mysqli_query($conn,$sql1);
            echo"<script>alert('password successfully updated')</script>";

           
        }
        echo "<script> alert('confirm password is not matched') </script>";
    }
      echo "<script> alert(' password is not matched') </script>";
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2:wght@800&family=Baloo+Bhaina+2:wght@800&display=swap" rel="stylesheet">
    <style>
        /* CSS RESET  */
        body{
            font-family: 'Baloo Bhai 2', cursive;
            margin: 0px;
            padding: 0px;
            background: url(Images/Student7.jpg);
            background-repeat:no-repeat ;
           background-size: 1550px 800px;  
           font-family: Baloo Bhai;  
           
        }

.input
{
width:400px;
height:35px;
border:2px solid grey;
font-size:16px;
margin-left:50px;
}
        .navbar
        {
         display: inline-block;
         /* border: 3px solid white; */
        margin-left: 2%;
         margin-top: 25px;
         border-radius: 5px;
        }
        .navbar li{
            display: inline-block;
        }
        .navbar li a{
            color: white;
            font-size: 23px;
            padding: 13px 15px;
            text-decoration: none;
        }
        .navbar li a:hover{
           
           color: grey;
           font-size: 23px;
           padding: 13px 15px;
           text-decoration: none; 
       }
     

    
    </style>
</head>
<body>
    <header>
        <div class="navbar">
        <ul>
            <li><a href="AdminHome.php">Home</a> </li>
        <li><a href="StudentList.php">Student List</a> </li>
        <li><a href="AddQuestion.php">Add Question</a></li>
        <li><a href="UpdateQuestion.php">Update Question</a></li>
        <li> <a href="QuestionList.php">Question List</a></li>
        <li><a href="ExamResult.php">Result</a></li>
        <li><a href="Feedback.php">Feedback</a></li>
        <li><a href="ChangePassword.php">Account</a></li>
        <li><a href="stulogout1.php">Logout</a></li>
        </ul>
    </div><hr>
<div style="width:500px;height:400px; background-color:white; border:3px solid grey; margin-left:350px;">
<form action="#" method="post">
<table width="500" height="350" border="0">
<tr><th style="font-size:22px;"><u>Change Password</u></th></tr>
<tr><td><input type=password name=pswd class="input"  placeholder="Enter Current Password" value="" required></td></tr>
<tr><td><input type=password name=npswd class="input" placeholder="Enter New Password"required></td></tr>
<tr><td><input type=password name=cpswd class="input" placeholder="Confirm Password" required></td></tr>

<tr><th><input type=submit name="submit" value=Submit><input type=reset value=Reset></th></tr>

</table>
</form>

</div> 
</header>
   
</body>
</html>

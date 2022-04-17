<?php 


// session_start();
if (isset($_POST['submit'])) {
$conn=mysqli_connect("localhost","root","","online_exam") or die("unsuccesfully");
$ema=$_POST['email'];
// $stu=$_SESSION['student2']=$ema;
$id=$_POST['id'];
$npswd=$_POST['pswrd'];
$cpswd=$_POST['cpswrd'];
$sql="select * from adminlogin where email='$ema'" ;
$qry=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($qry)){
    $em=$row['email']; 
    $i=$row['accountnumber'];
}
    
    if ($em==$ema) {
        if ($i==$id){
            if($npswd==$cpswd){
              $sql1="UPDATE adminlogin SET pass='$cpswd' where email='$ema'";
            
            $qry1=mysqli_query($conn,$sql1);
            
             echo"<script>alert('password successfully changed')</script>";
        }
        else{
            echo"<script>alert('password and confirm password does not matched')</script>";

        }
    }
       else {  
        echo"<script>alert('email and id does not updated')</script>";
        }

    }
    else{
       echo"<script>alert('Email does not existed')</script>";
    }

}
    ?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forget Password</title>
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
      .navbar
        {
         display: inline-block;
         /* border: 3px solid white; */
        margin-left: 2%;
         margin-top: 0px;
         border-radius: 5px;
        }
        .navbar li{
            display: inline-block;
        }
        .navbar li a{
            color: red;
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

.input
{
width:400px;
height:35px;
border:2px solid grey;
font-size:16px;
margin-left:50px;
}
       

    
    </style>
</head>
<body>
    <header>
    <div class="navbar">
      <ul>
             <li><a href="Adminlogin.php">Home</a> </li>
            </ul> </div>
        
    </header>
   
<div style="width:500px;height:400px; background-color:white; border:3px solid grey; margin:120px; margin-left: 450px;">
<form action="#" method="post">
<table width="500" height="350" border="0">

<tr><th style="font-size:22px;"><u>Forget Password</u></th></tr>
<tr><td><input type=text name="email" class="input"  placeholder="Enter email" value="" required></td></tr>
<tr><td><input type=text name="id" class="input"  placeholder="id" value="" required></td></tr>
<tr><td><input type=text name="pswrd" class="input"  placeholder="password" value="" required></td></tr>
<tr><td><input type=text name="cpswrd" class="input"  placeholder="confirm password" value="" required></td></tr>


<tr><th><input type=submit name="submit" value=Submit><input type=reset value=Reset></th></tr>

</table>
</form>

</div> 

   
</body>
</html>

<?php
session_start();
$user = $_SESSION['student5'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* CSS RESET  */
        body{
            margin: 0px;
            padding: 0px;
            background: url(Student7.jpg);
            background-repeat:no-repeat ;
           background-size: 1550px 800px;
           
             
           
        }
        .navbar
        {
         display: inline-block;
         border: 3px solid white;
        margin-left: 2%;
         margin-top: 25px;
         border-radius: 5px;
         /* position: fixed; */
        }
        .navbar li{
            display: inline-block;
        }
        .navbar li a{
            color: white;
            font-size: 23px;
            padding:  60px;
            text-decoration: none; 
        }
        .navbar li a:hover{
           
            color: grey;
            font-size: 23px;
            padding:  60px;
            text-decoration: none; 
        }

    
    </style>
</head>
<body>
    <header>
        <div class="navbar">
        <ul>
        <li><a href="userprofile.php"> Profile</a> </li>
        <li><a href="">Exam</a></li>
        <li><a href="">Result</a></li>
        <li><a href="">Update Profile</a></li>
        <li><a href="userfeedback.php">Feedback</a></li>
        <li><a href="">Logout</a></li>
        </ul>
    </div><hr>
    </header>

<div style="background-color: rgba(255,120,120,0.7);width: 500px;height: 300px;margin: auto;border: 5px solid red;">
    <form action="" method="Post">
    <table>
        <?php

$con=mysqli_connect("127.0.0.1","root","","onlineexam"); 
$sql="select * from feed where name='$user'";
$qry = mysqli_query($con,$sql);
$row = mysqli_fetch_assoc($qry);
$n = $row['name'];
        ?>
        <tr>
            <th>Enter Your email</th>
            <th><input type="text" name="email" readonly value="<?php echo $user ?>"></th>
        </tr>
        <tr>
            <th>Enter Your name</th>
            <th><input type="text" name="name" readonly value="<?php echo $n; ?>"></th>


        </tr>
         <tr>
            <th>Enter Your Subject</th>
            <th><input type="text" name="subject"></th>


        </tr>
 <tr>
            <th>Your Message</th>
            
            <th><textarea name="message"></textarea></th>


        </tr>
 <tr>
            <th>Date</th>
            <th><input type="text" name="date"></th>


        </tr>

 <tr>
            
            <th><input type="submit" name="submit"></th>


        </tr>



    </table>


</div>
    </form>
</body>
</html>


<?php


$con=mysqli_connect("127.0.0.1","root","","onlineexam"); 
if (isset($_POST['submit'])) {

      $email=$_POST['email'];
      $name=$_POST['name'];
      $sub=$_POST['subject']; 
      $msg=$_POST['message'];
      // $date=$_POST['date'];

$sql="insert into feed values('$email','$name','$sub','$msg')";
$qry=mysqli_query($con,$sql);

}





 





?>







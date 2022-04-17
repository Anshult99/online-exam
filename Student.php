<?php
session_start();
$conn=mysqli_connect("localhost","root","","online_exam") or die("not connected");
$p=$_SESSION['student'];
if(!$p){
    echo "<script>alert('login first')</script>";
}
else
{
$sql="select * from stu_reg where email='$p'";
$qry=mysqli_query($conn,$sql);
if($row=mysqli_fetch_assoc($qry)){
    $em=$row['name'];
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
        /* CSS RESET  */
        #ab{
            font-size: 100;
        }
        body{
            margin: 0px;
            padding: 0px;
            background: url(Images/Student7.jpg);
            background-repeat:no-repeat ;
           background-size: 1550px 800px;
           
             
           
        }
        .navbar
        {
        /* display: inline-block;*/
         border: 3px solid white;
         margin-right: 2%;
        margin-left: 2%;
         margin-top: 25px;
         border-radius: 5px;
         /* position: fixed; */
        }
        .navbar li{
            display: inline-block;
        }
        .navbar li a{

            font-style: bold;
            color: white;
            font-size: 23px;
            padding:  50px;
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
        <li><a href="Student.php"> Home</a> </li>
        <li><a href="showprofile.php"> Profile</a> </li>
        <li><a href="show_question.php" target="_blank" >Exam</a></li>
        <li><a href="sturesult.php">Result</a></li>
        <li><a href="updateprofile.php">Update Profile</a></li>
         <li> <a href="StuFeedBack.php">Feedback</a></li>
        <li><a href="stulogout.php">Logout</a></li>
        </ul>
    </div><hr>
    </header>
    <marquee style="border: 5px solid white; background-color: rgba(192, 110, 158, 1); color: white; margin: 35px ; padding: 25px; border-radius: 50px"> <h1 id="ab"> welcome <?php echo " <span style='color:red'>  $em </span>";?></h1></marquee>
    
</body>
</html>
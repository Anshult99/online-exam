<?php

$conn=mysqli_connect("localhost","root","","online_exam") or die("not connected");
$sql="select * from stufeed ";
$qry=mysqli_query($conn,$sql);

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
td{
    padding-left: 100px;
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
<title>Student List</title>     
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
<div style="width:1180px;height:480px;  border:2px solid grey; margin-left:50px;overflow:srcoll;box-shadow:0px 15px 20px grey; background-color:lightgrey;">
<center><h1 style="color:green;"><u>Exam Result</u></h1></center>
<table width=1140 border="1" cellspacing="0" cellpadding="3" style="margin:20px;">

<tr style="color:white;background-color:dodgerblue; ">
    <th>Student ID </th>
    <th>Date</th>
    <th>Subject  </th> 
    <th>Message  </th></tr>
<?php 
     while($row=mysqli_fetch_assoc($qry)){
    $nam=$row['name'];
   $subj=$row['sub'];
     $mes=$row['msg'];
     ?>

    <tr>
        <td><?php echo $nam ;?> </td>
    <td> 
        
    </td>
        <td><?php echo $subj ;?> </td>
  
        <td><?php echo $mes ;?> </td>
    </tr>
    <?php } ?>

</table>
</div>    
</header>
    
</body>
</html>
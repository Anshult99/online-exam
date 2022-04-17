<?php
session_start();
$conn=mysqli_connect("localhost","root","","online_exam")or die("unsuccesfully");
$sql="select * from exam_ques";
$qry=mysqli_query($conn,$sql);
// if (mysqli_num_rows>0) {
  


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
<div style="width:1180px;height:480px;border:2px solid grey;margin-left:50px;overflow:scroll;box-shadow:0px 15px 20px grey; background-color:lightgrey;">
<center><h1 style="color:brown;"><u>Question List</u></h1></center>
<table width=1140 border="1" cellspacing="0" cellpadding="3" style="margin:20px;">
<tr style="color:white;background-color:red;">

    <th>Ques ID</th>
    <th>Question</th>
    <th>Option1</th>
    <th>Option2</th>
    <th>Option3</th>
    <th>Option4</th>
    <th>Answer</th>
</tr>
<?php
 while ($row = mysqli_fetch_assoc($qry)) {
      $nm=$row['num'];
     $q= $row['ques'];
     $o1= $row['opt1'];
     $o2= $row['opt2'];
      $o3=$row['opt3'];
      $o4=$row['opt4'];
      $a=$row['ans'];
   
?>
<tr>
    <td><?php echo $nm ; ?></td>
    <td><?php echo $q ; ?></td>
    <td><?php echo $o1 ; ?></td>
    <td><?php echo $o2 ; ?></td>
    <td><?php echo $o3 ; ?></td>
    <td><?php echo $o4 ; ?></td>
    <td><?php echo $a ; ?></td>
</tr>
<?php } ?>
</table>
</div>    
</header>
    
</body>
</html>
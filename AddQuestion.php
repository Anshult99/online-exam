<!-- this is comment -->
<?php
if (isset($_POST['submit'])) {
    $q=$_POST['ques'];
    $op1=$_POST['opt1'];
    $op2=$_POST['opt2'];
    $op3=$_POST['opt3'];
    $op4=$_POST['opt4'];
    $a=$_POST['ans'];
$conn=mysqli_connect("localhost","root","","online_exam");
$sql= "INSERT INTO exam_ques( ques, opt1, opt2, opt3, opt4, ans) VALUES ('$q','$op1','$op2','$op3','$op4','$a')";
$qry= mysqli_query($conn,$sql);
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
<form action="" method="POST">
<table width="500" height="400" border="0">
<tr><th style="font-size:22px;"><u>Add Question</u></th></tr>
<tr><td><input type=text name="ques" class="input" placeholder="Question" required></td></tr>
<tr><td><input type=text name="opt1" class="input" placeholder="Option1" required></td></tr>
<tr><td><input type=text name="opt2" class="input" placeholder="Option2" required></td></tr>
<tr><td><input type=text name="opt3" class="input" placeholder="Option3" required></td></tr>
<tr><td><input type=text name="opt4" class="input" placeholder="Option4" required></td></tr>
<tr><td><input type=text name="ans" class="input" placeholder="Answer" required></td></tr>
<tr><th><input type=submit name="submit" value=Submit><input type=reset value=Reset></th></tr>
</table>
</form>
</div>    
</header>

</body>
</html>
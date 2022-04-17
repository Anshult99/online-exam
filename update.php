<?php 
session_start();
$con=mysqli_connect("localhost","root","","online_exam");
$id=$_SESSION['quid'];
 $sql="select * from  exam_ques where num = '$id'" ;
$qry1=mysqli_query($con,$sql);



while($row1=mysqli_fetch_assoc($qry1)){
    
    $q=   $row1['ques'];
    $op1= $row1['opt1'];
    $op2= $row1['opt2'];
    $op3= $row1['opt3'];
    $op4= $row1['opt4']; 
    $a1=  $row1['ans']; 

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
           background-size: 1550px 2800px;  
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
<div style="width:500px;height:100%; background-color:white; border:3px solid grey; margin-left:350px;">
<form action="" method="POST">
<table width="500" height="400" border="0">
<tr><th style="font-size:22px;"><u>Update Question</u></th></tr>


<tr><td><input type=hidden name="num" class="input"   required></td></tr>
<tr><td><input type=text name="ques" class="input" value="<?php echo $q ;?>"  required></td></tr>
<tr><td><input type=text name="opt1" class="input" value="<?php echo $op1 ;?>" required></td></tr>
<tr><td><input type=text name="opt2" class="input" value="<?php echo $op2 ;?>" required></td></tr>
<tr><td><input type=text name="opt3" class="input" value="<?php echo $op3 ;?>" required></td></tr>
<tr><td><input type=text name="opt4" class="input" value="<?php echo $op4 ;?>" required></td></tr>
<tr><td><input type=text name="ans" class="input"  value="<?php echo $a1 ;?>" required></td></tr>
<tr><th><input type=submit name="submit" value=Submit><input type=reset value=Reset></th></tr>
<?php 

}


?>
</table>


</form>

</div> 

</header>

</body>
</html>
<?php 

if (isset($_POST['submit'])) {
    $conn=mysqli_connect("localhost","root","","online_exam");
     $que=$_POST['ques'];
     $opt1=$_POST['opt1'];
     $opt2=$_POST['opt2'];
     $opt3=$_POST['opt3'];
     $opt4=$_POST['opt4']; 
     $answer=$_POST['ans'];
  $sql4="UPDATE exam_ques SET ques='$que',opt1='$opt1',opt2='$opt2',opt3='$opt3',opt4='$opt4',ans='$answer' WHERE num =  '$id'"; 
  $qry4=mysqli_query($conn,$sql4);
  if ($qry4) {
     echo "<script> alert('Question updated successfully')</script>";
     header("location:http://localhost/online-exam/QuestionList.php");
  }else{
    echo "<script> alert('Question not updated ')</script>";
  }
    


}



?>







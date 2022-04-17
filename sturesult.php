<?php 
session_start();
$conn=mysqli_connect("localhost","root","","online_exam");
$stu=$_SESSION['student'];

$sql="select * from result where sid ='$stu'";
$qry= mysqli_query($conn,$sql);
if($row=mysqli_fetch_assoc($qry)){
 $sid=$row['sid'];
 $mma=$row['m_marks'];
 $oba=$row['o_marks'];

}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Result
	</title>
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
          border: 3px solid white; 
          padding-left: 30px;
     margin-left: 2%;
         margin-top: 25px;
         border-radius: 5px;
         margin-right: 2%;
        }
        .navbar li{
            display: inline-block;
        }
        .navbar li a{
            color: white;
            font-size: 23px;
            padding: 13px 65px;
            text-decoration: none;
        }
        .navbar li a:hover{
           
           color: grey;
           font-size: 23px;
           padding: 13px 65px;
           text-decoration: none; 
       }
     

    
    </style>
</head>
<body>
 <header>
        <div class="navbar">
        <ul>
            <li><a href="Student.php"> Home</a> </li>
			<li><a href="showprofile.php">Profile</a></li>
            <li><a href="show_question.php">Exam</a></li>
            <li><a href="StuFeedBack.php">Feedback</a></li>
           <li><a href="updateprofile.php">Update Profile</a></li>
           <li><a href="stulogout.php">logout</a></li>
		</ul>

    </div>
</header>
<div style="width:500px;height:400px; background-color:rgba(180, 120, 10, 9.0); border:3px solid grey; margin-left:450px; margin-top: 50px;">
<center><h1>Result</h1></center>
<center><table width="400" height="250" border="0" ></center>
<!-- <tr><th style="font-size:22px; padding-left: 150px;"><u>Result</u></th></tr> -->
<tr> <th > Name  </th><td> <?php echo $sid ;?> </td></tr>
<tr><th > Maximum Marks </th><td><?php echo $mma; ?></td></tr>
<tr> <th > Obtained Marks  </th><td><?php echo $oba; ?></td></tr>
</table>
</div>


	

</body>
</html>
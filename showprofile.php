

<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>profile</title>
 <style>
 	body{
         
      background-image: url(Images/Student7.jpg);
      background-repeat: no-repeat;
      background-size: 1500px 800px;

 	}
   .navbar{

         display: inline-block;
         border: 2px solid white;
         margin: 3%;
         margin-top: 50px;
         border-radius: 5px;
       /* position: fixed;*/

   }
   .navbar li{
           display:inline-block;

   }

   .navbar li a{
   	  color: white;
   	  font-size: 25px;
   	  padding: 65px;
   	  text-decoration: none;

   }

.navbar li a:hover{
font-style: bold;
     color: red;
     font-size: 25px;
   	  padding: 65px;
}
.showprofile{
         
        border: 2px solid white;
        background-color: skyblue;
        color: white;
        margin: 20px 50px;
     /*   margin-top: 100px;*/
        text-align:center;
        border-radius: 25px;
        padding: 20px 50px;
       
}
 th{

    color: white;
    font-size: 16pt;
    text-align: left;
  padding: 4px;

 }

 table{

 	 margin: 0px auto; 
 	 width:50%;
 	 border: 3px solid red;
 }

 </style>


</head>
<body>
	
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
   
	<div class="showprofile">
		<h1>Student Profile</h1>
		<table>

            <?php 
session_start();
$stu=$_SESSION['student'];
$con= mysqli_connect("localhost","root","","online_exam") or die ('connection failed ');
 $sql="select * from stu_reg where email='$stu' ";
$qry=mysqli_query($con,$sql);
if ($row=mysqli_fetch_assoc($qry)) {
$email = $row['email'];
$name=$row['name'];
$course=$row['quali'];
$dob=$row['dob'];
$gen=$row['gen'];
$add=$row['address'];
$city=$row['city'];
$state=$row['state'];
$pin=$row['pin'];
$phone=$row['phone'];
$img=$row['image'];

?>
			
          <tr>
          	
          	<th>Email</th>
          	<th><?php  echo $email ;?></th>
          </tr> 
          <tr>
            
            <th>Name</th>
            <th><?php  echo $name ;?></th>
          </tr>
          <tr>
          	<th>Course</th>
            <th><?php echo $course;?></th>

          </tr>
          <tr>
          	<th>DOB</th>
            <th><?php  echo $dob; ?></th>

          

           <tr>
          	<th>Gender</th>
            <th><?php echo $gen; ?></th>

          </tr>
 <tr>
          	<th>Address</th>
            <th><?php   echo $add; ?></th>

          </tr>

 <tr>
          	<th>city</th>
            <th><?php echo $city; ?></th>

          </tr>
 <tr>
          	<th>State</th>
            <th><?php echo $state; ?></th>

          </tr>

 <tr>
          	<th>pin</th>
            <th><?php echo $pin ;?></th>

          </tr>
          <tr>
            <th>phone</th>
            <th><?php echo $phone ;?></th>

          </tr>
 <tr>
          	<th>Image</th>
            <th><?php  echo "<img src='$img' hight='100'  width='100'>" ; ?></th>

          </tr>


<?php } ?>
		</table>

	</div>

</body>
</html>

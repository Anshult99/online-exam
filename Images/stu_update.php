<?php
$con= mysqli_connect("127.0.0.1","root","","online_exam");
session_start();
   echo $uemail=$_SESSION['uname'];
 
 if ($uemail=="") {
 	header("location:index.php?plaese laogin");
}
$sql= "select * from reg_data where uname='$uemail'";
$qry=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($qry);
$email=$row['uname'];
$sname=$row['sname'];
$dob=$row['dob'];
$add=$row['add'];
$city=$row['city'];
$state=$row['state'];		
$pin=$row['pin'];
$fone=$row['fone'];
 
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
            background: url(Images/Student7.jpg);
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

        .div{
        	margin: auto;
        	height: 325px;
        	width: 50%;
        	background-color: lightgrey;
        	border: thick solid grey;
        }
        .div .input{
        	width: 250px;
        	height: 25px;
        	font-size: 18pt;
        	text-align: center;

        }

        th{
        	font-size: 19pt;
        }
        .update{
        	font-size: 16pt;
        	color: yellow;
        	background-color: red;
        }

    
    </style>
</head>
<body>
    <header>
        <div class="navbar">
        <ul>
        <li><a href="StudentProfile.php"> Profile</a> </li>
        <li><a href="exam_start.php">Exam</a></li>
        <li><a href="#">Result</a></li>
        <li><a href="Stu_update.php">Update Profile</a></li>
        <li><a href="studentfeedback.php">Feedback</a></li>
        <li><a href="stu_logout.php">Logout</a></li>
        </ul>
    </div><hr>
    </header>

    <div class="div">
    	<form action="update_conf.php" method="post">
    		<table>
    			<tr>
    				<th>Enter Email : </th>
    				<th><input type="text" class="input" name="email" readonly value="<?php echo $email; ?>"></th>
    			</tr>

    			<tr>
    				<th>Enter Name :</th>
    				<th><input type="text" class="input" name="name" readonly value="<?php echo $sname; ?>"></th>
    			</tr>

    			<tr>
    				<th>Enter Address : </th>
    				<th><input type="text" class="input" name="add" value="<?php echo $add; ?>"></th>
    			</tr>

    			<tr>
    				<th>Enter Date Of Birth : </th>
    				<th><input type="text" class="input" name="dob" value="<?php echo $dob; ?>"></th>
    			</tr>

    			<tr>
    				<th>Enter City : </th>
    				<th><input type="text" class="input" name="city" value="<?php echo $city; ?>"></th>
    			</tr>

    			<tr>
    				<th>Enter State : </th>
    				<th><input type="text" class="input" name="state" value="<?php echo $state; ?>"></th>
    			</tr>

    			<tr>
    				<th>Enter Pin : </th>
    				<th><input type="text" class="input" name="pin" value="<?php echo $pin; ?>"></th>
    			</tr>

    			<tr>
    				<th>Enter Contact : </th>
    				<th><input type="number" class="input" name="contact" value="<?php echo $fone; ?>">
    			</tr>

    			<tr>
    				<th colspan="2">
    					<input type="submit" name="update" class="update" value="Update Your Details">

    				</th>
    			</tr>
    		</table>
    	</form>	
    </div>
    
</body>
</html>

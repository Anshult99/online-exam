<?php


if(isset($_POST['submit']))
{
    $con= mysqli_connect("localhost","root","","online_exam")or die("conection failed");
         $email = $_POST['user'];
         $name = $_POST['sname'];
         $quali = $_POST['Course'];
         $dob = $_POST['dob'];
         $gen = $_POST['gender'];
         $add = $_POST['addr'];
         $city = $_POST['city'];
         $state = $_POST['state'];
         $pswrd = $_POST['pswd'];
         $cpswrd = $_POST['cpswd'];
         $pin = $_POST['pin'];
         $phone = $_POST['contact'];
         $image = $_FILES['file']['name'];
         $tmp_name=$_FILES['file']['tmp_name'];
         $folder= "uploadImage/".$image ;
       
        move_uploaded_file($tmp_name,$folder);


$q = "INSERT INTO `stu_reg`(`email`, `name`, `quali`, `dob`, `gen`, `address`, `city`, `state`, `pswrd`, `cpswrd`, `pin`, `phone`, `image`) VALUES ('$email','$name','$quali','$dob','$gen','$add','$city','$state','$pswrd','$cpswrd','$pin','$phone','$folder')";


        $r = mysqli_query($con,$q) or die("failed");

         header("location:http://localhost/online-exam/index.php");
    }

        ?>
    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Exam</title>
    <style>
         body {
            margin: 0px;
            padding: 0px;
            background: url(Images/Student7.jpg);
            background-repeat: no-repeat;
            background-size: 1550px 800px;
            color: white;
            /* font-family: 'Baloo Bhaina 2', cursive; */
            background-color: rgba(0, 0, 0, 0.329);


        }
        .navbar {
            display: inline-block;
            /* border: 3px solid white; */
            margin-left: 25%;
            margin-top: 25px;
            border-radius: 5px;
        }

        .navbar li {
            display: inline-block;
        }

        .navbar li a {
            color: white;
            font-size: 23px;
            padding: 33px 50px;
            text-decoration: none;
        }

        .navbar li a:hover {

            color: rgb(97, 7, 7);
            font-size: 23px;
            padding: 0px 50px;
            text-decoration: none;
            border-bottom: 2px solid orange;
        }
        .container{
            width: 730px;
            height: 690px;
            /* border: 2px solid orange ; */
            margin-left: 400px;
            background-color:rgba(0, 0, 0, 0.918);
           
        }
        .content{
            color:white;
            font-size: 25px;
            padding-left: 100px;
            
            
        }
        .content input{
            padding: 5px 27px;
            margin: 5px;
            border-radius: 5px;
            width: 44%;
            border-radius: 2px black;
            font-size: 19px;
            /* padding-left: 80px; */
            padding-top: 10px;
        }
        .content select{
            padding: 5px 20px;
            margin: 5px;
            border-radius: 5px;
            width: 63%;
            border-radius: 4px black;
            font-size: 20px;
            /* padding-left: 80px; */
            padding-top: 10px;
        }
        
        .btn {
            margin: 5px;
            color: white;
            font-size: 20px;
            padding: 14px 80px;
            border-radius: 20px;
            margin-left: 100px;
            background-color: rgb(255, 166, 0);
          
        }
        
    </style>
</head>
<body>
    <header style=" background-color: rgb(0,0,0); /* Fallback color */
background-color: rgba(0, 0, 0, 0.26);">
    <div class="navbar">
        <ul>
            <li><a href="index.php"> Home</a> </li>
            <li> <a href="Course.php">Courses</a></li>
            <li><a href="Registeration.php">Registeration</a></li>
            <li><a href="Contact.php">Contact Us</a></li>
        </ul>
</header>
<div class="container">
 <center><h1><u>Registeration FORM</u></h1></center>
<form action="" method="post" enctype="multipart/form-data">
 
 <table class="content">
    <tr><td>Select your Image</td> <td><input type="file" name="file"></td></tr>
   
    <tr><td>User Name/E Mail:</td> <td>Student Name</td></tr>

    <tr><td><input type="text" name="user"></td><td><input type="text" name="sname"></td></tr>

      <tr><td> Qualification</td><td>Date of Birth</td></tr>

    <tr><td><select name="Course" name="Course">
        <option value="BCA">BCA</option>
        <option value="B.Tech">B.Tech</option>
        <option value="B.COM">B.Com</option>
        <option value="BBA">BBA</option>
        <option value="BSC">BSC</option>
        <option value="Diploma">Diploma</option>
        <option value="MBA">MBA</option>
        <option value="B.Voc">B.Voc</option></select></td>
        
    <td><input type="date" name="dob"></td></tr>
    
    <tr><td>Gender:</td><td>Address</td></tr>
       <td><label for="genx"><input type="radio" name="gender" value="male" id="genx" >Male</label>
        <label for="genxx"><input type="radio" name="gender" value="female" id="genxx">Female</label></td>
        
        <td><input type="text" name=addr></td></tr>
    

    <tr><td>City</td><td>State</td></tr>

    <tr><td><input type="text" name="city"></td><td><select name="state">
        <option value="Andhra Pradesh">Andhra Pradesh</option>
        <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
        <option value="Arunachal Pradesh">Arunachal Pradesh</option>
        <option value="Assam">Assam</option>
        <option value="Bihar">Bihar</option>
        <option value="Chandigarh">Chandigarh</option>
        <option value="Chhattisgarh">Chhattisgarh</option>
        <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
        <option value="Daman and Diu">Daman and Diu</option>
        <option value="Delhi">Delhi</option>
        <option value="Lakshadweep">Lakshadweep</option>
        <option value="Puducherry">Puducherry</option>
        <option value="Goa">Goa</option>
        <option value="Gujarat">Gujarat</option>
        <option value="Haryana">Haryana</option>
        <option value="Himachal Pradesh">Himachal Pradesh</option>
        <option value="Jammu and Kashmir">Jammu and Kashmir</option>
        <option value="Jharkhand">Jharkhand</option>
        <option value="Karnataka">Karnataka</option>
        <option value="Kerala">Kerala</option>
        <option value="Laddakh">Laddakh</option>
        <option value="Madhya Pradesh">Madhya Pradesh</option>
        <option value="Maharashtra">Maharashtra</option>
        <option value="Manipur">Manipur</option>
        <option value="Meghalaya">Meghalaya</option>
        <option value="Mizoram">Mizoram</option>
        <option value="Nagaland">Nagaland</option>
        <option value="Odisha">Odisha</option>
        <option value="Punjab">Punjab</option>
        <option value="Rajasthan">Rajasthan</option>
        <option value="Sikkim">Sikkim</option>
        <option value="Tamil Nadu">Tamil Nadu</option>
        <option value="Telangana">Telangana</option>
        <option value="Tripura">Tripura</option>
        <option value="Uttar Pradesh">Uttar Pradesh</option>
        <option value="Uttarakhand">Uttarakhand</option>
        <option value="West Bengal">West Bengal</option>
        </select></td></tr> 

     <tr><td>Password:</td><td>Confirm Password:</td></tr>

    <tr><td><input type="password" name="pswd"></td>
        <td><input type="password" name="cpswd"></td></tr>
        
        <tr><td>Pin</td><td>Contact Number</td></tr>

    <tr><td><input type="number" name="pin"></td>
        <td><input type="number" name=contact></td></tr>
    
    
</table><hr>
<input type="Submit" name="submit" value="Submit" class="btn">
<button class="btn">Reset</button>
</form>
</div>
<div>

</div>

</body>
</html>
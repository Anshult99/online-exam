<?php
session_start();
$stu=$_SESSION['student'];
$conn=mysqli_connect("localhost","root","","online_exam")or die("unsuccesfully");
$sql ="select * from stu_reg where email='$stu'" or die("select query failed");
$qry=mysqli_query($conn,$sql);
if (mysqli_num_rows($qry)>0) {

 while($row=mysqli_fetch_assoc($qry)){

        $email1 = $row['email'];
         $name1 = $row['name'];
         $quali1 =$row['quali'];
         $dob1 = $row['dob'];
         $gen1 = $row['gen'];
         $add1 = $row['add'];
         $city1 = $row['city'];
         $state1 = $row['state'];
         $pswrd1 = $row['pswrd'];
         $cpswrd1 = $row['cpswrd'];
         $pin1 =   $row['pin'];
         $phone1 = $row['phone'];
         $image1 = $row['image'];
 // header("location:http://localhost/online-exam/index.php");
    ?>
    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Profile</title>
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
             border: 3px solid white;
            margin-left:1%;
            margin-right: 1%;
            margin-top: 25px;
            border-radius: 5px;
        }

        .navbar li {
            display: inline-block;
        }

        .navbar li a {
            color: white;
            font-size: 23px;
            padding: 0px 80px;
            text-decoration: none;
        }

        .navbar li a:hover {

            color: rgb(97, 7, 7);
            font-size: 23px;
            padding: 0px 80px;
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
          <li><a href="showprofile.php">Profile</a></li>
            <li><a href="show_question.php">Exam</a></li>
            <li><a href="StuFeedBack.php">Feedback</a></li>
           <li><a href="updateprofile.php">Update Profile</a></li>
           <li><a href="stulogout.php">logout</a></li>
        </ul>
</header>
<div class="container">
 <center><h1><u>Update Form</u></h1></center>
<form action="" method="post" enctype="multipart/form-data">
 
 <table class="content">
    
    <tr><td>Select your Image</td> <td><input type="file" name="file" value="<?php echo  $image1 ; ?>" ></td></tr>
   
    <tr><td>User Name/E Mail:</td> <td>Student Name</td></tr>

    <tr><td><input type="text" name="user" value="<?php echo  $email1 ; ?>"></td><td><input type="text" name="sname" value="<?php echo  $name1 ; ?>"></td></tr>

      <tr><td> Qualification</td><td>Date of Birth</td></tr>

    <tr><td><select name="Course" name="Course" value="<?php echo  $quali1 ; ?>">
        <option value="BCA" <?php if($quali1=='BCA'){echo "";}?>>BCA</option>
        <option value="B.Tech"<?php if($quali1=='B.Tech'){echo "selected";}?>>B.Tech</option>
        <option value="B.COM"<?php if($quali1=='B.COM'){echo "selected";}?>>B.Com</option>
        <option value="BBA"<?php if($quali1=='BBA'){echo "selected";}?>>BBA</option>
        <option value="BSC"<?php if($quali1=='BSC'){echo "selected";}?>>BSC</option>
        <option value="Diploma"<?php if($quali1=='Diploma'){echo "selected";}?>>Diploma</option>
        <option value="MBA"<?php if($quali1=='MBA'){echo "selected";}?>>MBA</option>
        <option value="B.Voc"<?php if($quali1=='B.Voc'){echo "selected";}?>>B.Voc</option></select></td>
        
    <td><input type="date" name="dob" value="<?php echo $dob1 ;?> "> </td></tr>
    
    <tr><td>Gender:</td><td>Address</td></tr>
       <td><label for="genx"><input type="radio" name="gender" value="male" <?php if($gen1=='male') {echo "selected"; }?> >Male</label>
        <label for="genxx"><input type="radio" name="gender" value="female" <?php if($gen1=='female') {echo "selected"; }?>>Female</label></td>
        
        <td><input type="text" name="add" value="<?php echo $add1 ; ?>"></td></tr>
    

    <tr><td>City</td><td>State</td></tr>

    <tr><td><input type="text" name="city" value="<?php echo  $city1 ; ?>"></td><td><select name="state" value="<?php echo  $state1 ; ?>">
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

    <tr><td><input type="password" name="pswd" value="<?php echo  $pswrd1 ; ?>"></td>
        <td><input type="password" name="cpswd" value="<?php echo  $cpswrd1 ; ?>"></td></tr>
        
        <tr><td>Pin</td><td>Contact Number</td></tr>

    <tr><td><input type="number" name="pin" value="<?php echo  $pin1 ; ?>"></td>
        <td><input type="number" name=contact value="<?php echo  $phone1 ; ?>"></td></tr>
    
   
</table>
 <?php } } ?> <hr>
<input type="Submit" name="submit4" value="Submit" class="btn">
<button class="btn">Reset</button>
</form>
</div>
</body>
</html>
<?php
if(isset($_POST['submit4']))
{
    $stu=$_SESSION['student'];

  $conn=mysqli_connect("localhost","root","","online_exam")or die("unsuccesfully");

         $em = $_POST['user'];
         $na = $_POST['sname'];
         $qu = $_POST['Course'];
         $do = $_POST['dob'];
         $ge = $_POST['gender'];
         $ad = $_POST['add'];
         $ci = $_POST['city'];
         $st = $_POST['state'];
         $ps = $_POST['pswd'];
         $cp = $_POST['cpswd'];
         $pi= $_POST['pin'];
         $ph = $_POST['contact'];
         $im = $_FILES['file']['name'];
         $tmp_name=$_FILES['file']['tmp_name'];
         $folder= "uploadImage/".$im ;
       
        move_uploaded_file($tmp_name,$folder);

   try { 
    $sql1 ="UPDATE `stu_reg` SET `email`='[`$em`]',`name`='[`$na`]',`quali`='[`$qu`]',`dob`='[`$do`]',`gen`='[`$ge`]',`add`='[`$ad`]',`city`='[`$ci`]',`state`='[`$st`]',`pswrd`='[`$ps`]',`cpswrd`='[`$cp`]',`pin`='[`$pi`]',`phone`='[`$ph`]',`image`='[`$folder`]' WHERE email='[$stu]'";
    $qry1=mysqli_query($conn,$sql1);
   
   
}
catch (mysqli_sql_exception $e) { 
      var_dump($e);
      exit; 
   } 
}
?>

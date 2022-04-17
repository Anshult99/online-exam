<?php 
session_start();
$con=mysqli_connect("localhost","root","","online_exam")or die("conection failed");
$stu=$_SESSION['student'];
$sql="select * from stu_reg where email = '$stu'";
$qry=mysqli_query($con, $sql);
if (mysqli_num_rows($qry)>=0) {
    

while($row=mysqli_fetch_assoc($qry)){
     $email=$row['email'];
     $name=$row['name'];
     $q=$row['quali'];
     $d=$row['dob'];
     $g=$row['gen'];
     $a=$row['address'];
     $c=$row['city'];
     $s=$row['state'];
     $psd=$row['pswrd'];
     $cpsd=$row['cpswrd'];
     $p=$row['pin'];
     $co=$row['phone'];
     $im=$row['image'];

?>
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Profile</title>
    <style>
         body {
            margin: 2px;
            padding: 0px;
            background: url(Images/Student7.jpg);
            background-repeat: no-repeat;
            background-size: 1550px 1800px;
            color: white;
            /* font-family: 'Baloo Bhaina 2', cursive; */
          /*  background-color: rgba(0, 0, 0, 0.329)*/;


        }
        .navbar {
           display: inline-block;
             border: 3px solid white;
            margin-left:2%;
            margin-right: 2%;
            margin-top: 25px;
            border-radius: 5px;
        }

        .navbar li {
            display: inline-block;
        }

        .navbar li a {
            font-style: bold;
             color: white;
            font-size: 23px;
            padding: 0px 60px;
           text-decoration: none;
        }

        .navbar li a:hover {

           color: red;
            font-size: 23px;
            padding: 0px 60px;
            text-decoration: none;
            /*border-bottom: 2px solid orange;*/
        }
        .container{
            width: 730px;
            height: 730px;
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
            margin: 15px;
            color: white;
            font-size: 20px;
            padding: 10px 70px;
            border-radius: 20px;
            margin-left: 80px;
            background-color: rgb(255, 166, 0);
          
        }
        .btn:hover{
           background-color: red;
           color: grey;
            font-size: 23px;
            padding: 10px 80px;
            text-decoration: none;
        }
        
    </style>
</head>
<body>
    <header style=" background-color: rgb(0,0,0); /* Fallback color */
background-color: rgba(0, 0, 0, 0.0); margin-top: 0%; margin-left:8%">
    <div class="navbar">
        <ul>
            <li><a href="Student.php"> Home</a> </li>
          <li><a href="showprofile.php">Profile</a></li>
            <li><a href="show_question.php">Exam</a></li>
            <li><a href="StuFeedBack.php">Feedback</a></li>
           <li><a href="updateprofile.php">Update Profile</a></li>
           <li><a href="stulogout.php">logout</a></li>
        </ul>
</header>
<div class="container">
 <center><h1><u>Update Form</u></h1></center>
<form method="POST" action="" enctype="multipart/form-data">
 <table class="content">
    <td>Select your Image</td>
        <td><input type="file" name="file"></td>
  
    <tr><td>User Name/E Mail:</td>
        <td>Student Name</td>
    </tr>

    <tr><td><input type="text" name="user" value="<?php echo "$stu";?>"></td><td><input type="text" name="sname" value="<?php echo "$name";?>"></td></tr>

      <tr><td> Qualification</td><td>Date of Birdth</td></tr>

    <tr><td><select name="Course"  name="Course">
        <option value="BCA"<?php if($q=='BCA'){echo "";}?>>BCA</option>
        <option value="B.Tech"<?php if($q=='B.Tech'){echo "selected";}?>>B.Tech</option>
        <option value="B.COM"<?php if($q=='B.COM'){echo "selected";}?>>B.Com</option>
        <option value="BBA"<?php if($q=='BBA'){echo "selected";}?>>BBA</option>
        <option value="BSC"<?php if($q=='BSC'){echo "selected";}?>>BSC</option>
        <option value="Diploma"<?php if($q=='Diploma'){echo "selected";}?>>Diploma</option>
        <option value="MBA"<?php if($q=='MBA'){echo "selected";}?>>MBA</option>
        <option value="B.Voc"<?php if($q=='B.Voc'){echo "selected";}?>>B.Voc</option></select></td>
        

        <td><input type="date" name="dob" value="<?php echo "$d";?>"></td></tr>
    <tr><td>Gender:</td><td>Address</td></tr>
       
    <td><input type="radio" name="gender" value="male"<?php if($g=='male'){echo "selected";}?>>Male
        <input type="radio" name="gender" value="female"<?php if($g=='female'){echo "selected";}?>>Female</td>
<td><input type="text" name="addr" value="<?php echo "$a";?>"></td>
</tr>
    

    <tr><td>City</td><td>State</td></tr>

    <tr><td><input type="text" name="city" required value="<?php echo "$c";?>"></td><td><select name="state">
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

    <tr><td><input type="password" name="pswd" value="<?php echo "$psd";?>"></td><td><input type="password" name="cpswd" value="<?php echo "$cpsd";?>"></td></tr>

<td>Pin</td><td>Contact Number</td></tr>

    <tr><td><input type="number" name="pin" value="<?php echo "$p";?>"></td><td><input type="number" name="contact" value="<?php echo "$co";?>"></td></tr>
    
    
</table>
<?php } }?>
<!-- <hr style="margin: 1rem ; margin-left:30rem;"> -->
<input type="Submit" name="update" value="UPDATE" class="btn"></hr>
<input type="reset" name="reset" value="RESET" class="btn"></hr>
</form>
</div>
<div>

</div>

</body>
</html>
<?php 

if (isset($_POST['update'])) {


    // $con2=mysqli_connect("localhost","root","","online_exam")or die("conection failed");
     $u=$_POST['user'];
    $sn=$_POST['sname'];
    $cr=$_POST['Course'];
    $d=$_POST['dob'];
    $g=$_POST['gender'];
    $a=$_POST['addr'];
    $c=$_POST['city'];
    $st=$_POST['state'];
    $ps=$_POST['pswd'];
    $cps=$_POST['cpswd'];
    $pin=$_POST['pin'];
    $co=$_POST['contact'];
    $file_name=$_FILES['file']['name'];     
    $tmp_file=$_FILES['file']['tmp_name'];
    $folder="uploadImage/".$file_name;
    move_uploaded_file($tmp_file, $folder);
   
    $sql2="UPDATE stu_reg SET email='$u',name='$sn',quali='$cr',dob='$d',gen='$g',address='$a',city='$c',state='$st',pswrd='$ps',cpswrd='$cps',pin='$pin',phone='$co',image='$folder'  WHERE email='$stu' ";
    $qry2=mysqli_query($con,$sql2);
    header("location:http://localhost/online-exam/showprofile.php");
}
?>
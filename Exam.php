<?php 
session_start();
$_SESSION['student'];
 $conn=mysqli_connect("localhost","root","","online_exam");
$sql="select * from stu_reg ";
$qry1=mysqli_query($conn,$sql);
while($row1=mysqli_fetch_assoc($qry1)){
	$nm= $row1['name'];}
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> examination</title>
	<style>
		.ex{
			display: inline-block;
			border: 5px solid green;
			background: grey;
		
		}
		.em{
			margin-top: 10px;
			color: red;
			padding: 10px;
			display: inline-block;
			border: 1px red solid;
	</style>
</head>
<body >
	<h4 class="em" > <?php echo "Welcome:"." " ."$nm";?></h4>
</div>
	<center><h1 class="ex" >EXAMINATION PAPER</h1></center>

</body>
</html>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<html>

<!-- Bootstrap css -->
<link rel="stylesheet"
href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<style>
.positiona{
position: fixed;
right: 10px;
top: 5px;
background: white;
color: #EA2027;
font-size: 20px;
padding: 10px 20px;
border-radius: 5px;
border: 1px solid #EA2027;
transition: all 0.3s linear;
}
.positiona:hover{
background: #EA2027;
color:white;
border-radius: 10px;
}
.mainbtn{
background: red;

border: 1.5px solid white;
background-color: #7efff5;
font-size: 15pt;
padding: 10px 20px;
border-radius: 5px;
transition: all 0.4s linear ;
}
.mainbtn:hover{
background-color: #0652DD;
color: white;
box-shadow: 0px 0px 2rem 0.5rem #d1ccc0;
border-radius: 10px;
}
</style>

</head>
<body class="container-fluid">

<a href="Student.php" title="Go Home Page" class="positiona"> Go Back </a>
<div class="m-5">

<br>
<?php


$conn=mysqli_connect("localhost","root","","online_exam");
$sql="select * from exam_ques";

$qry=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($qry)){
	$a= $row['ques'];
	$b= $row['opt1'];	
	$c= $row['opt2'];
	$d= $row['opt3'];
	$e= $row['opt4'];
    $id=$row['num'];




?>



<form action="submit_exam.php" method="post" class="shadow-lg container-fluid">
<table width="100%" class="table table-borderless table-primary">
<!-- <tr style='color:blue;'>
<th colspan='2'><input type='hidden' name='' value=''></th>
</tr> -->
<tr style='color:blue;'>
<th colspan='2'><span style='color:red;'>Question <?php echo "$id".": "."$a";?> </span> </th>
</tr>
<tr>
<th>a) <input type='radio' name="<?php echo"$id"; ?>" id='' value=''> <label for=''><?php echo "$b";?></label></th>
<th>b) <input type='radio' name="<?php echo"$id"; ?>" id='' value=''> <label for=''><?php echo "$c";?></label></th>
</tr>
<tr>
<th>c) <input type='radio' name="<?php echo"$id"; ?>" id='' value=''> <label for=''><?php echo "$d";?> </label></th>
<th>d) <input type='radio' name=" <?php echo"$id"; ?>" id="" value=''> <label for=''><?php echo "$e";?> </label></th>

</tr>
<?php } ?>


<tr>
<th colspan='2' >
	<center>
<input type='submit' name='submit' value='Submit Exam' class='mainbtn'>
<input type='reset' value='Clear Form' class='mainbtn'></center>
</th></center>
</tr>
</form>
</body>
</html>









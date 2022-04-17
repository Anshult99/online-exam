<?php
session_start();
$stu=$_SESSION['student'];
if(!$stu){
   echo "<script> alert('login first')</script>";
}
else{
$con= mysqli_connect("localhost","root","","online_exam") or die ('connection failed ');



?>
<html>
<head>
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
<title>Exam Page</title>
</head>
<body class="container-fluid">
<a href="Student.php" title="Go Home Page" class="positiona"> Go Back </a>
</table>
<?php
$sql="select * from stu_reg Where email='$stu'";
$qry=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($qry);
 $name=$row['name'];

?>

<br>
<div class="m-5">
<h1 class="bg-dark text-white text-center p-3 d-inline-block w-100" style="borderradius:20px;"><?php echo $name ?></h1>
</div>
<form action="submit_exam.php" method="post" class="shadow-lg container-fluid">
<table width="100%" class="table table-borderless table-primary">
<?php 

$sql1="select * from result Where sid='$stu'";
$qry1=mysqli_query($con,$sql1);
if($row1=mysqli_fetch_assoc($qry1)){

 echo" <h1>Your exam has been completed</h1>";


}else{

   $sql2="select * from exam_ques";
   $qry2=mysqli_query($con,$sql2) or die ("failed") ;
   $data=1;
   $count=1;
   

   while($row2=mysqli_fetch_assoc($qry2)){
         $qid=$row2['num'];
         $q=$row2['ques'];
         $op1=$row2['opt1'];
          $op2=$row2['opt2'];
           $op3=$row2['opt3'];
            $op4=$row2['opt4'];




echo"
<tr style='color:blue;'>
<th colspan='2'><input type='hidden' name='qid$count' value='$qid'></th>
</tr>";

echo"
<tr style='color:blue;'>
<th colspan='2'><span style='color:red;'>Question $count</span> :$q </th>
</tr>";

echo"
<tr>
<th>a) <input type='radio' name='ans$count' id='$data' value='$op1'> <label for='$data'>$op1</label></th>";


echo"
<th>b) <input type='radio' name='ans$count' id='$data' value='$op2'> <label for='$data'>$op2</label></th>

</tr>";
$data++;


echo "<tr>
<th>c) <input type='radio' name='ans$count' id='$data' value='$op3'> <label for='$data'>$op3</label></th>";
$data++;
echo"
<th>d) <input type='radio' name='ans$count' id='$data' value='$op4'> <label for='$data'>$op4</label></th>




</tr>";
$data++;
$count++;


}
echo"
<tr>
<th colspan='2'>
<input type='submit' name='submit' value='Submit Exam' class='mainbtn'>
<input type='reset' value='Clear Form' class='mainbtn'>



</th>
</tr>
";

}
}
?>
</form>
</body>
</html>
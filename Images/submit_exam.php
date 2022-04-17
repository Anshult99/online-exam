<?php  
error_reporting();
$qid[1]=$_POST['qid1'];
$ans[1]="not submited"

$qid[2]=$_POST['qid2']
$ans[2]="not submited"

$qid[3]=$_POST['qid3'];
$ans[3]="not submited"

$qid[4]=$_POST['qid4'];
$ans[4]="not submited"

$qid[5]=$_POST['qid6'];
$ans[5]="not submited"

$qid[7]=$_POST['qid7'];
$ans[7]="not submited"

$qid[8]=$_POST['qid8'];
$ans[8]="not submited"

$qid[9]=$_POST['qid9'];
$ans[9]="not submited"

if (isset($qid[10]=$_POST['qid10'];)) {
	$ans[10]="not submited"
}

for ($i=1; $i <=10 ; $i++) { 
	 echo "<br>$qid[$i]";
}





if (isset($_POST['ans2'])) {
	
}

if (isset($_POST['ans3'])) {
	
}

if (isset($_POST['ans4'])) {
	
}
if (isset($_POST['ans5'])) {
	
}

if (isset($_POST['ans6'])) {
	
}

if (isset($_POST['ans7'])) {
	
}
if (isset($_POST['ans8'])) {
	
}
if (isset($_POST['ans9'])) {
	
}

if (isset($_POST['ans10'])) {
	
}

for ($i=1; $i <=10 ; $i++) { 
	echo "<br>$qid[$i] : $ans[$i]"

}
session_start();
$email=$_SESSION['email'];
require ('connection.php');
for ($i=1; $i <=10 ; $i++) { 
	# code...


$sql="insert into resut_mstr values('$email','$qid[$i]','$ans[$i]','curdate())'";

mysqli_query($con,$sql);
}
$query="SELECT reslut_mstr.qid FROM quest_mstr, reslut_mstr WHERE quest_mstr.qid=result_mstr.qid AND quest_mstr.answer= result_mstr.ans AND result_mstr.sid='$email'";
$marks=0;
$r=mysqli_query($con,$query2);

while ($row=mysqli_fetch_array()) {
	# code...

$marks=$marks+10;
}
$query3="INSERT INTO result values('$email',curdate(),'100','marks')";

$i1=mysqli_query($con,$query3);
if ($i1>0) {
	header('location:stureslut.php');
}
else
	{
echo "exam error";

	}


?>
<?php
session_start();
$con= mysqli_connect("localhost","root","","online_exam") or die ('connection failed ');
$stu=$_SESSION['student'];

$ans[1]="not submitted";
$qidp[1]=$_REQUEST['qid1'];
$ans[2]="not submitted";
$qidp[2]=$_REQUEST['qid2'];
$ans[3]="not submitted";
$qidp[3]=$_REQUEST['qid3'];
$ans[4]="not submitted";
$qidp[4]=$_REQUEST['qid4'];
$ans[5]="not submitted";
$qidp[5]=$_REQUEST['qid5'];

if (isset($_REQUEST['ans1'])) {
$ans[1]=$_POST['ans1'];
}
if (isset($_REQUEST['ans2'])) {
$ans[2]=$_POST['ans2'];
}
if (isset($_REQUEST['ans3'])) {
$ans[3]=$_POST['ans3'];
}
if (isset($_REQUEST['ans4'])) {
$ans[4]=$_POST['ans4'];
}
if (isset($_REQUEST['ans5'])) {
$ans[5]=$_POST['ans5'];
}

for ($i=1; $i <=5 ; $i++) {
$sql="insert into result_master(sid,qid,ans)Values('$stu','$qidp[$i]','$ans[$i]')";
$qry=mysqli_query($con, $sql) or die('fail');
}
$sql1="Select result_master.qid from result_master,exam_ques where
exam_ques.num=result_master.qid and exam_ques.ans=result_master.ans and result_master.sid='$stu'";

$marks=0;
$qry1=mysqli_query($con,$sql1) or die("failed");
while ($row=mysqli_fetch_array($qry1)) {
 $marks=5+$marks;
}
$sql2="insert into result Values('$stu','25',$marks)";
mysqli_query($con,$sql2) or die('failed again');
 header("location:http://localhost/online-exam?msg successfully submitted");
?>
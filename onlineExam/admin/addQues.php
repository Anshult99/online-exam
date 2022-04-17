<?php

 session_start();
 $u = $_SESSION['admin'];
 if(!isset($u))
 {
 	header("location: ../index.php");
 }

 $ids = $_GET['id'];

 if($ids == 1)
 {
	$str = "C Programming Language";
	$tab = "ctest";
	$qid = "cid";
 }
 else if($ids == 2)
 {
	$str = "C++ Programming Language";
	$tab = "cpptest";
	$qid = "cppid";
 }
 else if($ids == 3)
 {
	$str = "Java Programming Language";
	$tab = "javatest";
	$qid = "javaid";
 }
 else if($ids == 4)
 {
	$str = "General knowledge Test";
	$tab = "gktest";
	$qid = "gkid";
 }
 else
 {
	$str = "English Test";
	$tab = "engtest";
	$qid = "engid";
 }

?>
<html>

<body style="margin:0px;padding:0px;">

<center>
<div style="width:900px; background-color: #F4E7BD;">

    <div style="width:900px;">
	<img src="../images/adminBanner.jpg">
    </div>

<div style="width:900px;height:25px;">             
	<img src="../images/home_bor_top.jpg" style="border-width:0px;" />             
</div>
    
<div style="width:900px; background-color: #F4E7BD;">

	<form action="" method="post">

	<table style="width:900px; background-color: #F4E7BD;" cellpadding="0" cellspacing="0">

		<tr>
			<td style="width:100px;">&nbsp;</td>
			<td style="width:700px;">&nbsp;</td>
			<td style="width:100px;">&nbsp;</td>
		</tr>
		<tr>
			<td style="width:100px;">&nbsp;</td>
			<td style="width:700px;">
				
			<table style="width:700px;">

			<tr>

				<td style="width:200px;text-align:left;">&nbsp;
					<span style="font-size:28px;">	Welcome </span>
					<span style="font-size:22px;font-weight:bold;"> Admin </span>
				</td>
				<td style="width:200px;text-align:right;">&nbsp;</td>
				<td style="width:300px;text-align:center;">&nbsp;</td>

			</tr>

			</table>

			</td>
			<td style="width:100px;">&nbsp;</td>
		</tr>
		<tr>
			<td style="width:100px;">&nbsp;</td>
			<td style="width:700px;">&nbsp;</td>
			<td style="width:100px;">&nbsp;</td>
		</tr>
		<tr>
			<td style="width:100px;">&nbsp;</td>
			<td style="width:700px;">

			<fieldset style="width:600px;">
			
			<legend>
				<span style="font-size:22px;font-weight:bold;color:red;"> <?php echo $str; ?> </span>
			</legend>

			<table style="width:500px;text-align:left;">

				<tr>
					<td>	
						<input type="text" name="t1" placeholder="Enter a Question" style="width:500px;height:40px;font-size:14px;">
					</td>
				</tr>

				<tr>
					<td>	
						<input type="text" name="t2" placeholder="Enter a First Option" style="width:500px;height:40px;font-size:14px;">
					</td>
				</tr>

				<tr>
					<td>	
						<input type="text" name="t3" placeholder="Enter a Second Option" style="width:500px;height:40px;font-size:14px;">
					</td>
				</tr>

				<tr>
					<td>	
						<input type="text" name="t4" placeholder="Enter a Third Option" style="width:500px;height:40px;font-size:14px;">
					</td>
				</tr>

				<tr>
					<td>	
						<input type="text" name="t5" placeholder="Enter a Fourth Option" style="width:500px;height:40px;font-size:14px;">
					</td>
				</tr>

				<tr>
					<td>	
						<input type="text" name="t6" placeholder="Enter an Answer" style="width:500px;height:40px;font-size:14px;">
					</td>
				</tr>

				<tr>
					<td>	
					
					<table>
	
					<tr>
						<td style="width:150px;">&nbsp;</td>
						<td style="width:150px;text-align:center;">

						<input type="submit" name="s" value="SUBMIT" style="width:150px;">

						</td>
						<td style="width:100px;">&nbsp;</td>
						<td style="width:150px;text-align:center;">

						<input type="reset" name="r" value="RESET" style="width:150px;">
						
						</td>
						<td style="width:150px;">&nbsp;</td>
					</tr>

					</table>

					</td>
				</tr>

			</table>

			</fieldset>

			</td>
			<td style="width:100px;">&nbsp;</td>
		</tr>
		<tr>
			<td style="width:100px;">&nbsp;</td>
			<td style="width:700px;text-align:right;">
				<a href="adminHome.php">Go to back....</a>
			</td>
			<td style="width:100px;">&nbsp;</td>
		</tr>

	</table>		

	</form>
</div>

<div style="width:900px;height:25px;">
	<img src="../images/home_bor_bottom.jpg" style="border-width:0px;" />
</div>

<?php

if(isset($_POST['s']))
{

	$ques = $_POST['t1'];
	$o1 = $_POST['t2'];
	$o2 = $_POST['t3'];
	$o3 = $_POST['t4'];
	$o4 = $_POST['t5'];
	$ans = $_POST['t6'];

	include("../config.php");

	$q = "select * from counter";

	$r = mysql_query($q);

	if($row = mysql_fetch_array($r))
	{
		 if($ids == 1)
		 {
			$id = $row['cid'];
		 }
		 else if($ids == 2)
		 {
			$id = $row['cppid'];
		 }
		 else if($ids == 3)
		 {
			$id = $row['javaid'];
		 }
		 else if($ids == 4)
		 {
			$id = $row['gkid'];
		 }
		 else
		 {
			$id = $row['engid'];
		 }
	}

	$qq = "INSERT INTO ".$tab." VALUES ('$id','$ques','$o1','$o2','$o3','$o4','$ans') ";

	$rr = mysql_query($qq);
	
	if($rr > 0)
	{
		$id += 1;
		
		$qq1 = "UPDATE counter SET ".$qid."='".$id."'";

		$rr1 = mysql_query($qq1);

		if($rr > 0)
		{
			echo "<script>alert('Question Added Successfully')</script>";
		}		
	}
	else
	{
		echo "Error";
	}
}

include("footer.html");

?>
<?php

include("config.php");

$u = $_POST['t1'];

$p = $_POST['t2'];

$q = "select * from reg where uname='$u' and pass='$p'";

$r = mysql_query($q);

$c = mysql_num_rows($r);

if($c > 0)
{
	while($row = mysql_fetch_array($r))
	{
		session_start();
		$type = $row['atype'];
		$n = $row['name'];

		if($type == "student")
		{
			$_SESSION['user'] = $u;
			$_SESSION['name'] = $n;
			header("location: stu/stuHome.php");
		}
		else
		{
			$_SESSION['admin'] = $u;
			header("location: admin/adminHome.php");
		}
	}
}
else
{
	echo "<script>alert('Error: Regsitration not Successful')</script>";
}

?>
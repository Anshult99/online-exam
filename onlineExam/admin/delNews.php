<?php

$u = $_GET['id'];

include("../config.php");

$q = "delete from newsTable where id='$u'";

$r = mysql_query($q);

if($r > 0)
{
	header("location: news.php");
}
else
{
	echo "<script>alert('Error: Record Could not be deleted')</script>";
}

?>
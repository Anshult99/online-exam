<?php
session_start();
?>
<table border="1" cellspacing="0">
<tr>
	<th>uname</th>
	<th>sname</th>
	<th>Qualification</th>
	<th>DoB</th>
	<th>Address</th>
	<th>City</th>
	<th>State</th>
	
	
	

</tr>

<?php  
$con=mysqli_connect("127.0.0.1","root","","onlineexam");
$user = $_SESSION['uname'];
$sql= "select * from reg_data where uname='$user'";
$qry = mysqli_query($con,$sql);
while($row=mysqli_fetch_assoc($qry)){

	?>
	<tr>
<td><?php echo $row['uname']; ?></td>
<td><?php echo $row['sname']; ?></td>
<td><?php echo $row['qua']; ?></td>
<td><?php echo $row['dob']; ?></td>
<td><?php echo $row['add']; ?></td>
<td><?php echo $row['city']; ?></td>
<td><?php echo $row['state']; ?></td>




</tr>
<?php
}
?>

	</table>
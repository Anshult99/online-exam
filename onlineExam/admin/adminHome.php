<?php

 session_start();
 $u = $_SESSION['admin'];
 if(!isset($u))
 {
 	header("location: ../index.php");
 }

include("header.html");
?>

<div style="width:900px;height:25px;">
             
	<img src="../images/home_bor_top.jpg" style="border-width:0px;" />
             
</div>

<div style="width:900px;height:400px;background-color: #F4E7BD;">

	<div style="width:250px;margin-left:2px;height:400px;float:left;background-color: #F4E7BD;">

	<table style="width:250px;height:300px;border:1px solid brown;">

		<tr>
			<td style="background-color: #003366;text-align:center;height:30px;">
				<span style="color:white;font-weight:bold;">News Panel</span>
			</td>
		</tr>
		<tr>
			<td style="text-align:left;color:red;"> 
			
			<marquee scrollamount="4" direction="up" style="color:black;height:250px;" onmouseover="this.stop();" onmouseout="this.start();">
                	        <?php	
				include("../config.php");
			
				$q = "select * from newsTable";
			
				$r = mysql_query($q);
			
				$c = mysql_num_rows($r);
			
				if($c>0)
				{
					while($row = mysql_fetch_array($r))
					{
						echo "<label style='text-align:justify;'> * ".$row['news']."<br><hr><br></label>";			
					}
				}
				else
				{
					echo "No Data to Display";
				}
			
				?>                                
			</marquee>

			</td>
		</tr>

	</table>

	</div>

	<div style="width:648px;height:400px;float:left;background-color: #F4E7BD;">

		<table style="width: 648px;">
            <tr>
                <td style="width: 4px">
                    &nbsp;</td>
                <td style="width: 640px; text-align: center;">
                    <img id="ctl00_ContentPlaceHolder1_Image3" src="../images/funPicture1.jpg" style="border-width:0px;" />
                </td>
                <td style="width: 4px">
                    &nbsp;</td>
            </tr>
            <tr>
                <td style="width: 4px">
                    &nbsp;</td>
                <td style="width: 640px">
                    <table style="width: 640px; text-align: left;">
                        <tr>
                            <td style="width: 10px">
                                &nbsp;</td>
                            <td style="width: 630px">
&nbsp; Online Examination System has divided exams in two categories and each category has a sub category:
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 10px">
                                <img src="../images/bullet.jpg" style="border-width:0px;" />
                            </td>
                            <td style="width: 630px">
                                &nbsp;Computer exams&nbsp;</td>
                        </tr>
                        <tr>
                            <td style="width: 10px">
&nbsp;
                                <img src="../images/bullet.jpg" style="border-width:0px;" />
                            </td>
                            <td style="width: 630px">
                                &nbsp;C Language Test&nbsp;</td>
                        </tr>
                        <tr>
                            <td style="width: 10px">
&nbsp;
                                <img src="../images/bullet.jpg" style="border-width:0px;" />
                            </td>
                            <td style="width: 630px">
                                &nbsp;C++ Language Test&nbsp;</td>
                        </tr>
                        <tr>
                            <td style="width: 10px">
&nbsp;
                                <img src="../images/bullet.jpg" style="border-width:0px;" />
                            </td>
                            <td style="width: 630px">
                                &nbsp;Java Test&nbsp;</td>
                        </tr>
                        <tr>
                            <td style="width: 10px">
                                <img src="../images/bullet.jpg" style="border-width:0px;" />
                            </td>
                            <td style="width: 630px">
                                &nbsp;Other Tests&nbsp;</td>
                        </tr>
                        <tr>
                            <td style="width: 10px">
&nbsp;
                                <img src="../images/bullet.jpg" style="border-width:0px;" />
                            </td>
                            <td style="width: 630px">
                                &nbsp;General knowledge Test&nbsp;</td>
                        </tr>
                        <tr>
                            <td style="width: 10px">
&nbsp;
                                <img src="../images/bullet.jpg" style="border-width:0px;" />
                            </td>
                            <td style="width: 630px">
                                &nbsp;English Test&nbsp;</td>
                        </tr>
                    </table>
                </td>
                <td style="width: 4px">
                    &nbsp;</td>
            </tr>
            <tr>
                <td style="width: 4px">
                    &nbsp;</td>
                <td style="width: 640px">
                    &nbsp;</td>
                <td style="width: 4px">
                    &nbsp;</td>
            </tr>
            <tr>
                <td style="width: 4px">
                    &nbsp;</td>
                <td style="width: 640px">
                    &nbsp;</td>
                <td style="width: 4px">
                    &nbsp;</td>
            </tr>
            <tr>
                <td style="width: 4px">
                    &nbsp;</td>
                <td style="width: 640px">
                    &nbsp;</td>
                <td style="width: 4px">
                    &nbsp;</td>
            </tr>
                       
            </table>

	</div>

</div>

<div style="width:900px;height:25px;">

	<img src="../images/home_bor_bottom.jpg" style="border-width:0px;" />
             
</div>

<?php include("footer.html"); ?>
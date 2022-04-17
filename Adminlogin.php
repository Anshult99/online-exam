<?php
session_start();
if(isset($_POST['login'])){
    $uemail=$_REQUEST['email'];
    $upass=$_REQUEST['pswd'];
    $_SESSION['student1']=$uemail;
    $conn= mysqli_connect("localhost","root","","online_exam") or die("failed");
echo $sql= "select * from adminlogin where email='$uemail' and pass='$upass'";
    $qry=mysqli_query($conn,$sql);
    if($row=mysqli_fetch_assoc($qry)){
        $ue=$row['email'];
        $up=$row['pass'];

        if ($ue==$uemail and $up==$upass)  {
            header("location:http://localhost/online-exam/AdminHome.php");
         }

}

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        a{
            color: white;
            text-decoration: none;
        }
        .box{
            background-color:black;
            width: 400px;
            height: 400px;
            border-radius: 5px;
            margin-top: 100px;
            box-shadow: 12px 12px yellow  ;
         }
         #login{
             color:yellow;
             padding-top: 20px;
             
         }
         .table{
             width: 300px;
             height: 180px;
            color: white;
            padding: 30px;
            font-size: 25px;
            padding: 10px;
            border: white;
                     }
                     #button{
                         width: 300px;
                         height:50px ;
                         background: yellow ;
                         border-radius: 13px;
                         font-size: 33px;
                          }
                          #td input
                          {
                         width: 300px;
                         height:43px ;
                         background: white;
                         border-radius: 13px;
                         font-size: 33px;

                          }
                        #td select
                        {
                         width: 305px;
                         height:43px ;
                         background: white;
                         border-radius: 13px;
                         font-size: 33px; 
                        }
                        
    </style>
</head> 
<body style="  background: url(Images/Student7.jpg);">
    <form method="POST">
   <center><div class="box"><h1 id="login"> Admin Login </h1><hr>
    <table class="table" id="td">
      <td><select name="user"><option value="Admin">Admin</select></td></tr>
<tr><td><input type="text" name="email" placeholder="Email"></td></tr>
<tr><td><input type="password" name="pswd" placeholder="Password"></td></tr>
</table>
 <input type="submit" name="login" value="Login" id="button">
    <hr>
    <label style="color: white; margin-right: 120px; font-size: 17px;">
        <input type="checkbox" checked="checked" name="remember"> Remember me  </label> 
        <label style="color: white; font-size: 17px;">
      
   <a href="forgetpass.php" >Forget Password? </a></label>
    </form>
   

</div></center> </body>
</html>

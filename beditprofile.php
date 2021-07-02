<?php
require("buyerlogin.php");
session_start();
if(!$conn)
{
	die('connection failed : '.$conn->connect_error);
}
else
{
	if(isset($_POST['save'])){
	$bid= $_POST['bid'];
$bname= $_POST['bname'];
$bcontact= $_POST['bcontact'];
$baddress= $_POST['baddress'];
$bpassword= $_POST['bpassword'];
$bcpassword= $_POST['bcpassword'];
$bemail= $_POST['bemail'];

	if($bpassword==$bcpassword){
	$stmt="UPDATE buyerregistration SET ID ='$bid', NAME='$bname', CONTACT_NO='$bcontact', 
	ADDRESS='$baddress', PASSWORD='$bpassword', CONFIRM_PASSWORD='$bcpassword', EMAIL='$bemail' where ID='$bid'";
	$run=mysqli_query($conn,$stmt);
if($run)
{
	echo '<script type= "text/javascript"> alert("Updated successfully!") </script>';	
header("location: bprofile.php");
}
else
{
 echo "unsuccesful" .mysqli_error($conn);
}
	$closeconn= mysqli_close($conn);
	}
	else{
		echo '<script type= "text/javascript"> alert("Password not matched!") </script>';	
	}	}
}
?>
<html>
<head>
<title>BUYER EDIT PROFILE
</title>
<style>
.bgcolor{
height: 60px;
margin: 0;
background: black;
}
.bodybg{
background-image: url(images/buyer1.jpg);
background-position: center center;
background-repeat: no-repeat;
background-attachment: fixed;
background-size: cover;
height: 80%;
width: 100%;
}
.back{
height: 140px;
width: 100%;
background-color: black;
}
.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}
 .navbar a:hover, .dropdown:hover .dropbtn {
                        background-color:black;
                    }
					label{width:150px;
display: inline-block;
}
textarea{ vertical-align:top;
}
</style>
</head>
<body>
<div class="back">
<center><font color="white" face="Garamond" size="20" ><b>FARMING ASSISSTANT WEB PORTAL</b></font></style></center>
</div>
  <div class="navbar bgcolor"> <br>
			<a href="buyerpage.html" style="font-size:28px;color:white;text-decoration:none;font-family:georgian;margin-left:250px;margin-top:-5px">HOME</a>  
			<a href="bprofile.html" style="font-size:28px;color:white;text-decoration:none;margin-left:160px;font-family:georgian">PROFILE</a> 
			<a href="viewcrop.html" style="font-size:28px;color:white;text-decoration:none;margin-left:160px;font-family:georgian">VIEW CROP</a>
			  <a href="logout.php" style="font-size:28px;color:white;text-decoration:none;margin-left:160px;font-family:georgian">LOGOUT</a>        			
		</div>
<div class="bodybg">
			<center><form action="beditprofile.php" method="post" style="margin-top: 10px">
		<label style="margin-top: 10px"><b><font size="5" color="red">EDIT INFO</font></b></label><br><br>
<label><b><font size="5">BUYER ID</font></b></label>
<input type="text" placeholder="Enter ID" name="bid" style="width:20%;height:30px" value="<?php echo $_SESSION['bid'];?>" readonly><br><br>
<label><b><font size="5">NAME</font></b></label>
<input type="text" placeholder="Enter Name" name="bname" style="width:20%;height:30px" value="<?php echo $_SESSION['bname'];?>"><br><br>
<label><b><font size="5">CONTACT No</font></b></label>
<input type="number" placeholder="Enter Contact No" name="bcontact" style="width:20%;height:30px" value="<?php echo $_SESSION['bcontact'];?>"><br><br>
<label><b><font size="5">ADDRESS</font></b></label>
<input type="text" placeholder="Enter Address" name="baddress" style="width:20%;height:30px" value="<?php echo $_SESSION['baddress'];?>"><br><br>
<label><b><font size="5">PASSWORD</font></b></label>
<input type="text" placeholder="Enter Password" name="bpassword" style="width:20%;height:30px" value="<?php echo $_SESSION['bpassword'];?>"><br>
<label><b><font size="5">CONFIRM PASSWORD</font></b></label>
<input type="text" placeholder="Enter Password Again" name="bcpassword" style="width:20%;height:30px" value="<?php echo $_SESSION['bcpassword'];?>"><br>
<br	>	
<label><b><font size="5">EMAIL</font></b></label>
<input type="email" name="bemail" style="width:20%;height:30px" value="<?php echo $_SESSION['bemail'];?>"><br><br>
<button type="submit" name="save" style="margin-right: 10px;">SAVE</button>
<button type="reset" name="cancel" >CANCEL</button><br><br>
			</center>
			</div>		
</body>
</html>
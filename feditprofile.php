<?php
require("farmerlogin1.php");
session_start();
if(!$conn)
{
	die('connection failed : '.$conn->connect_error);
}
else
{
	if(isset($_POST['save'])){
	$fid= $_POST['fid'];
$fname= $_POST['fname'];
$fcontact= $_POST['fcontact'];
$faddress= $_POST['faddress'];
$fpassword= $_POST['fpassword'];
$fcpassword= $_POST['fcpassword'];
$femail= $_POST['email'];

	if($fpassword==$fcpassword){
	$stmt="UPDATE farmerregistration SET ID ='$fid', NAME='$fname', CONTACT_NO='$fcontact', 
	ADDRESS='$faddress', PASSWORD='$fpassword', CONFIRM_PASSWORD='$fcpassword', EMAIL='$femail' where ID='$fid'";
	$run=mysqli_query($conn,$stmt);
if($run)
{
	echo '<script type= "text/javascript"> alert("Updated successfully!") </script>';	
header("location: fprofilepage.php");
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
<title>FARMER EDIT PROFILE
</title>
<style>
.bgcolor{
height: 60px;
margin: 0;
background: black;
}
.bodybg{
background-image: url(images/farmerwall2.jpg);
background-position: center center;
background-repeat: no-repeat;
background-attachment: fixed;
background-size: cover;
height: 55%;
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
.bodybg{
background-image: url(images/farmerwall2.jpg);
background-position: center center;
background-repeat: no-repeat;
background-attachment: fixed;
background-size: cover;
height: 80%;
width: 100%;
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
			<a href="farmerpage.html" style="font-size:28px;color:white;text-decoration:none;font-family:georgian;margin-left:30px;margin-top:-5px">HOME</a>  
			<a href="fprofilepage.html" style="font-size:28px;color:white;text-decoration:none;margin-left:100px;font-family:georgian">PROFILE</a> 
			<a href="addcrop.html" style="font-size:28px;color:white;text-decoration:none;margin-left:100px;font-family:georgian">ADD CROP</a>
			<a href="deletecrop.html" style="font-size:28px;color:white;text-decoration:none;margin-left:100px;font-family:georgian">DELETE CROP</a> 
			<a href="viewbuyer.php" style="font-size:28px;color:white;text-decoration:none;margin-left:80px;font-family:georgian">VIEW BUYER</a> 
            			<a href="logout.php" style="font-size:28px;color:white;text-decoration:none;margin-left:65px;font-family:georgian">LOGOUT</a>
		</div>
		<div style="margin-top: 10px;" class="bodybg">
		<center><form method="post" action="feditprofile.php" >
			<label style="margin-top: 10px"><b><font size="5" color="red">EDIT INFO</font></b></label><br><br>
<label><b><font size="5">FARMER ID</font></b></label>
<input type="text" placeholder="Enter ID" name="fid" style="width:20%;height:30px" value="<?php echo $_SESSION['fid'];?>" readonly><br><br>
<label><b><font size="5">NAME</font></b></label>
<input type="text" placeholder="Enter Name" name="fname" style="width:20%;height:30px" value="<?php echo $_SESSION['fname'];?>" ><br><br>
<label><b><font size="5">CONTACT No</font></b></label>
<input type="number" placeholder="Enter Contact No" name="fcontact" style="width:20%;height:30px" value="<?php echo $_SESSION['fcontact'];?>" ><br><br>
<label><b><font size="5">ADDRESS</font></b></label>
<input type="text" placeholder="Enter Address" name="faddress" style="width:20%;height:30px" value="<?php echo $_SESSION['faddress'];?>" ><br><br>
<label><b><font size="5">PASSWORD</font></b></label>
<input type="text" placeholder="Enter Password" name="fpassword" style="width:20%;height:30px" value="<?php echo $_SESSION['fpassword'];?>" ><br>
<label><b><font size="5">CONFIRM PASSWORD</font></b></label>
<input type="text" placeholder="Enter Password Again" name="fcpassword" style="width:20%;height:30px" value="<?php echo $_SESSION['fcpassword'];?>" ><br><br>
<label><b><font size="5">EMAIL</font></b></label>
<input type="email" name="email" style="width:20%;height:30px" value="<?php echo $_SESSION['femail'];?>" ><br><br>
<button type="submit" name="save" >SAVE</button>
<button type="reset" name="cancel" style="margin-left: 10px;">CANCEL</button><br><br>
</form> </center>
		
		</div>
		
</body>
</html>
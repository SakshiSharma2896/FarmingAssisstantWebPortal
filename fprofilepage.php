<?php
require("farmerlogin1.php");
/*function getUsersData($fid){
	$array=array();
	$q=mysqli_query("select * from  'farmerregistration' where 'id'=".$fid);
	while($r=mysqli_fetch_assoc($q)){
		$array['fid']= $row['ID'];
		$array['fname']= $row['NAME'];
		$array['fcontact']= $row['CONTACT_NO'];
		$array['faddress']= $row['ADDRESS'];
		$array['fpassword']= $row['PASSWORD'];
		$array['fcpassword']= $row['CONFIRM_PASSWORD'];
		$array['femail']= $row['EMAIL'];
	}
	return $array;
}*/
session_start();
?>
<html>
<head>
<title>FARMER PROFILE
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
height: 70%;
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
			<a href="fprofilepage.php" style="font-size:28px;color:white;text-decoration:none;margin-left:100px;font-family:georgian">PROFILE</a> 
			<a href="addcrop.php" style="font-size:28px;color:white;text-decoration:none;margin-left:100px;font-family:georgian">ADD CROP</a>
			<a href="deletecrop.php" style="font-size:28px;color:white;text-decoration:none;margin-left:100px;font-family:georgian">DELETE CROP</a> 
			<a href="viewbuyer.php" style="font-size:28px;color:white;text-decoration:none;margin-left:80px;font-family:georgian">VIEW BUYER</a> 
            			<a href="logout.php" style="font-size:28px;color:white;text-decoration:none;margin-left:65px;font-family:georgian">LOGOUT</a>
		</div>
		
		<div style="margin-top: 10px;" class="bodybg" >
		<!--<center><form method="post" action="feditprofile.php" >
<label><b><font size="5">FARMER ID</font></b></label>
<input type="text" placeholder="Enter ID" name="fid" style="width:30%;height:30px"  value="<?php if(isset($_SESSION)) echo $_SESSION['fid']; ?>" readonly><br><br>
<label><b><font size="5">NAME</font></b></label>
<input type="text" placeholder="Enter Name" name="fname" style="width:30%;height:30px" readonly><br><br>
<label><b><font size="5">CONTACT No</font></b></label>
<input type="number" placeholder="Enter Contact No" name="fcontact" style="width:30%;height:30px" readonly><br><br>
<label><b><font size="5">ADDRESS</font></b></label>
<input type="text" placeholder="Enter Address" name="faddress" style="width:30%;height:30px" readonly><br><br>
<label><b><font size="5">PASSWORD</font></b></label>
<input type="password" placeholder="Enter Password" name="fpassword" style="width:30%;height:30px" readonly><br>
<label><b><font size="5">CONFIRM PASSWORD</font></b></label>
<input type="password" placeholder="Enter Password Again" name="fcpassword" style="width:30%;height:30px" readonly><br><br>
<label><b><font size="5">EMAIL</font></b></label>
<input type="email" placeholder="Enter Password Again" name="email" style="width:30%;height:30px" readonly><br><br>
<button type="submit" name="edit" >EDIT</button><br><br>
 <form></center>-->
 <center> <form method="post" action="feditprofile.php">
 <label><b><font size="15" color="red">PROFILE</font></b></label><br><br>
		 <font size="8" > <label>ID:<?php
		if(isset($_SESSION)){
	echo $_SESSION['fid'];
	}?> <br>
	Name:<?php
		if(isset($_SESSION)){
	echo $_SESSION['fname'];
	}
		?> <br>
 Contact_No:<?php
		if(isset($_SESSION)){
	echo $_SESSION['fcontact'];
	}
		?> <br>
		Address:<?php
		if(isset($_SESSION)){
	echo $_SESSION['faddress'];
	}
		?> <br>
		Email:<?php
		if(isset($_SESSION)){
	echo $_SESSION['femail'];
	}
		?> </label><br>
	</font>
<button type="submit" name="edit" >EDIT</button><br><br>	</form> </center> 
		
		</div>
		
</body>
</html>
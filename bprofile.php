<?php
require("buyerlogin.php");
session_start();
?>

<html>
<head>
<title>BUYER PROFILE
</title>
<style>
.bgcolor{
height: 60px;
margin: 0;
background: black;
}
.bodybg{
background-image: url(images/adminwall3.jpg);
background-position: center center;
background-repeat: no-repeat;
background-attachment: fixed;
background-size: cover;
height: 64%;
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
			<a href="bprofile.php" style="font-size:28px;color:white;text-decoration:none;margin-left:160px;font-family:georgian">PROFILE</a> 
			<a href="viewcrop.php" style="font-size:28px;color:white;text-decoration:none;margin-left:160px;font-family:georgian">VIEW CROP</a>
			  <a href="logout.php" style="font-size:28px;color:white;text-decoration:none;margin-left:160px;font-family:georgian">LOGOUT</a>        			
		</div>
<div class="bodybg" style="margin-top: 10px;">
<center>

			<!--<center><form action="beditprofile.php" method="post" style="margin-top: 10px">
<label><b><font size="5">BUYER ID</font></b></label>
<input type="text" placeholder="Enter ID" name="bid" style="width:30%;height:30px"   readonly><br><br>
<label><b><font size="5">NAME</font></b></label>
<input type="text" placeholder="Enter Name" name="bname" style="width:30%;height:30px" readonly><br><br>
<label><b><font size="5">CONTACT No</font></b></label>
<input type="number" placeholder="Enter Contact No" name="bcontact" style="width:30%;height:30px" readonly><br><br>
<label><b><font size="5">ADDRESS</font></b></label>
<input type="text" placeholder="Enter Address" name="baddress" style="width:30%;height:30px" readonly><br><br>
<label><b><font size="5">PASSWORD</font></b></label>
<input type="password" placeholder="Enter Password" name="bpassword" style="width:30%;height:30px" readonly><br>
<label><b><font size="5">CONFIRM PASSWORD</font></b></label>
<input type="password" placeholder="Enter Password Again" name="bcpassword" style="width:30%;height:30px" readonly><br>
<br	>	
<button type="submit" name="edit" >EDIT</button><br><br>
			</center>-->
			<form action="beditprofile.php" method="post" style="margin-top: 10px">
			<label><b><font size="15" color="red">PROFILE</font></b></label><br><br>
     <font size="7"><label> ID:<?php
		if(isset($_SESSION)){
	echo $_SESSION['bid'];
		}?> <br>
	Name:<?php
		if(isset($_SESSION)){
	echo $_SESSION['bname'];
	}
		?> <br>
		Contact_No:<?php
		if(isset($_SESSION)){
	echo $_SESSION['bcontact'];
	}
		?> <br>
		Address:<?php
		if(isset($_SESSION)){
	echo $_SESSION['baddress'];
	}
		?> <br>
		Email:<?php
		if(isset($_SESSION)){
	echo $_SESSION['bemail'];
	}
		?> <br>
		</label>
		</font><br>
<button type="submit" name="edit" >EDIT</button><br><br></form>		</center>
 		</div>		
</body>
</html>
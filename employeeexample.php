<html>
<head>
<title>FARMER REGISTRATION</title>
<style>
/*for backgroundimage*/
body{
background-image: url(images/drop3.jpg);
background-position: center center;
background-repeat: no-repeat;
background-attachment: fixed;
background-size: cover;
}
label{width:150px;
display: inline-block;
}
textarea{ vertical-align:top;
}
.center{
position: absolute;
top: 50%;
left: 50%;
transform: translate(-50%, -50%);
text-align: center;
}
img{
opacity: 0.1;
}
</style>
</head>
<body>
<h1 style="margin-top: 100px;"><font color="red" face="Garamond"><center>FARMER REGISTRATION</font></center></h1>
<center>
<form method="post" action="">
<label><b><font size="5">FARMER ID</font></b></label>
<input type="text" placeholder="Enter ID" name="fid" style="width:30%;height:30px" value="<?php echo $empid; ?>"  readonly><br><br>
<label><b><font size="5">NAME</font></b></label>
<input type="text" placeholder="Enter Name" name="fname" style="width:30%;height:30px" required><br><br>
<label><b><font size="5">CONTACT No</font></b></label>
<input type="number" placeholder="Enter Contact No" name="fcontact" style="width:30%;height:30px" required><br><br>
<label><b><font size="5">ADDRESS</font></b></label>
<input type="text" placeholder="Enter Address" name="faddress" style="width:30%;height:30px" required><br><br>
<label><b><font size="5">PASSWORD</font></b></label>
<input type="password" placeholder="Enter Password" name="fpassword" style="width:30%;height:30px" required><br>
<label><b><font size="5">CONFIRM PASSWORD</font></b></label>
<input type="password" placeholder="Enter Password Again" name="fcpassword" style="width:30%;height:30px" required><br>
<br><br>		
<button type="submit" name="register" >REGISTER</button><br><br>
<a href="farmerlogin.html">LOGIN if registered</a>
</form>
</center>
</body>
</html>
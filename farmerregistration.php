<?php
//databse connection
$conn= mysqli_connect('localhost', 'root', '', 'fawp');
error_reporting(0);
$query= "select * from farmerregistration order by id desc limit 1";
$result= mysqli_query($conn,$query);
$row = mysqli_fetch_array($result);
$lastid= $row['ID'];
if($lastid == ""){
	$empid= "FAM1";
}
else{
	$empid= substr($lastid,3);
	$empid= intval($empid);
	$empid= "FAM" . ($empid + 1);
}
if(!$conn)
{
	die('connection failed : '.$conn->connect_error);
}
else
{
	if($_SERVER["REQUEST_METHOD"]== "POST"){
	$fid= $_POST['fid'];
$fname= $_POST['fname'];
$fcontact= $_POST['fcontact'];
$faddress= $_POST['faddress'];
$fpassword= $_POST['fpassword'];
$fcpassword= $_POST['fcpassword'];
$femail= $_POST['femail'];

	if($fpassword==$fcpassword){
	$stmt="insert into farmerregistration(ID, NAME, CONTACT_NO, ADDRESS, PASSWORD, CONFIRM_PASSWORD, EMAIL)
	values('$fid', '$fname', '$fcontact', '$faddress', '$fpassword', '$fcpassword', '$email')";
	$run=mysqli_query($conn,$stmt);
if($run)
{
header("location: farmerlogin.html");
}
else
{
 echo "unsuccesful" .mysqli_error($conn);
}
	$closeconn= mysqli_close($conn);
	}
	else{
		echo '<script type= "text/javascript"> alert("Password not matched!") </script>';	;
	}	}
}
?>





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
<h1 style="margin-top: 75px;"><font color="red" face="Garamond"><center>FARMER REGISTRATION</font></center></h1>
<center>
<form method="post" action="farmerregistration.php">
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
<input type="password" placeholder="Enter Password Again" name="fcpassword" style="width:30%;height:30px" required><br><br>
<label><b><font size="5">EMAIL</font></b></label>
<input type="email" placeholder="Enter Password Again" name="email" style="width:30%;height:30px" required><br>
<br><br>		
<button type="submit" name="register" >REGISTER</button><br><br>
<a href="farmerlogin.html">LOGIN if registered</a>
</form>
</center>
</body>
</html>



<?php
//databse connection
$conn= mysqli_connect('localhost', 'root', '', 'fawp');
error_reporting(0);
$query= "select * from buyerregistration order by id desc limit 1";
$result= mysqli_query($conn,$query);
$row = mysqli_fetch_array($result);
$lastid= $row['ID'];
if($lastid == ""){
	$empid= "BUY1";
}
else{
	$empid= substr($lastid,3);
	$empid= intval($empid);
	$empid= "BUY" . ($empid + 1);
}
if(!$conn)
{
	die('connection failed : '.$conn->connect_error);
}
else
{
	if($_SERVER["REQUEST_METHOD"]== "POST"){
		$bid= $_POST['bid'];
$bname= $_POST['bname'];
$bcontact= $_POST['bcontact'];
$baddress= $_POST['baddress'];
$bpassword= $_POST['bpassword'];
$bcpassword= $_POST['bcpassword'];
$bemail= $_POST['bemail'];
	if($bpassword==$bcpassword){
	$stmt="insert into buyerregistration(ID, NAME, CONTACT_NO, ADDRESS, PASSWORD, CONFIRM_PASSWORD, EMAIL)
	values('$bid', '$bname', '$bcontact', '$baddress', '$bpassword', '$bcpassword', '$bemail')";
	$run=mysqli_query($conn,$stmt);
if($run)
{
header('location: buyerlogin.html');
}
else
{
 echo"unsuccesful" .mysqli_error($conn);
}
	$closeconn= mysqli_close($conn);
	}
	else{
		echo '<script type= "text/javascript"> alert("Password not matched!") </script>';	;
	}
}}
?>



<html>
<head>
<title>BUYER REGISTRATION</title>
<style>
/*for backgroundimage*/
body{
background-image: url(images/drop1.jpg);
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
</style>
</head>
<body link="green" alink="white" vlink="red">
<h1 style="margin-top: 100px;"><font color="red" face="Garamond"><center>BUYER REGISTRATION</font></center></h1>
<center>
<form action="buyerregistration.php" method="post">
<label><b><font size="5">BUYER ID</font></b></label>
<input type="text" placeholder="Enter ID" name="bid" style="width:30%;height:30px" value="<?php echo $empid; ?>"  readonly><br><br>
<label><b><font size="5">NAME</font></b></label>
<input type="text" placeholder="Enter Name" name="bname" style="width:30%;height:30px" required><br><br>
<label><b><font size="5">CONTACT No</font></b></label>
<input type="number" placeholder="Enter Contact No" name="bcontact" style="width:30%;height:30px" required><br><br>
<label><b><font size="5">ADDRESS</font></b></label>
<input type="text" placeholder="Enter Address" name="baddress" style="width:30%;height:30px" required><br><br>
<label><b><font size="5">PASSWORD</font></b></label>
<input type="password" placeholder="Enter Password" name="bpassword" style="width:30%;height:30px" required><br>
<label><b><font size="5">CONFIRM PASSWORD</font></b></label>
<input type="password" placeholder="Enter Password Again" name="bcpassword" style="width:30%;height:30px" required><br>
<br><br>		
<label><b><font size="5">EMAIL</font></b></label>
<input type="email" placeholder="Enter Password Again" name="bemail" style="width:30%;height:30px" required><br>
<br><br>	
<button type="submit" name="register" >REGISTER</button><br><br>
<a href="buyerlogin.html">LOGIN</a> if registered
</form>
</center>
</body>
</html>
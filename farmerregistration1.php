<?php
//databse connection
$conn= mysqli_connect('localhost', 'root', '', 'fawp');
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
	$empid= "EMP" . ($empid + 1);
}
if(!$conn)
{
	die('connection failed : '.$conn->connect_error);
}
else
{
	$fid= $_POST['fid'];
$fname= $_POST['fname'];
$fcontact= $_POST['fcontact'];
$faddress= $_POST['faddress'];
$fpassword= $_POST['fpassword'];
$fcpassword= $_POST['fcpassword'];

	if($fpassword==$fcpassword){
	$stmt="insert into farmerregistration(ID, NAME, CONTACT_NO, ADDRESS, PASSWORD, CONFIRM_PASSWORD)
	values('$fid', '$fname', '$fcontact', '$faddress', '$fpassword', '$fcpassword')";
	$run=mysqli_query($conn,$stmt);
if($run)
{
echo "data insert succesfully";
}
else
{
 echo"unsuccesful" .mysqli_error($conn);
}
	$closeconn= mysqli_close($conn);
	}
	else{
		echo "Password not matched!";
	}
}
?>
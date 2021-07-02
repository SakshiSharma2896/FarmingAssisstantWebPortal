<?php
session_start();
$conn=mysqli_connect("localhost","root","","fawp");
if(isset($_POST['submit']))
{
$fid= $_POST['fid'];
$fname= $_POST['fname'];
$fcontact= $_POST['fcontact'];
$faddress= $_POST['faddress'];
$fpassword= $_POST['fpassword'];
$fcpassword= $_POST['fcpassword'];;
$pd="insert into farmerregistration(ID, NAME, CONTACT, ADDRESS, PASSWORD, CONFIRM PASSWORD) 
values('$fid','$fname','$fcontact','$faddress','$fpassword','$fcpassword')";
$run=mysqli_query($conn,$pd);
if($run)
{
echo "data insert succesfully";
}
else
{
	echo"unsuccesful";
}
}
?>

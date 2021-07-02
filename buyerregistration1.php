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
	if($bpassword==$bcpassword){
	$stmt="insert into buyerregistration(ID, NAME, CONTACT_NO, ADDRESS, PASSWORD, CONFIRM_PASSWORD)
	values('$bid', '$bname', '$bcontact', '$baddress', '$bpassword', '$bcpassword')";
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
}}
?>
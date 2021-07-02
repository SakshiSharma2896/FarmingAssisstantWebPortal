<?php
$cid= $_POST['cid'];
$type= $_POST['type'];
$cname= $_POST['cname'];
$image= $_POST['image'];
$price= $_POST['price'];
$quantity=$_POST['quantity'];
$description= $_POST['description'];
$fid=$_POST['fid'];

//databse connection
$conn= mysqli_connect('localhost', 'root', '', 'fawp');
error_reporting(0);
$query= "select * from crop order by id desc limit 1";
$result= mysqli_query($conn,$query);
$row = mysqli_fetch_array($result);
$lastid= $row['ID'];
if($lastid == ""){
	$empid= "CRP1";
}
else{
	$empid= substr($lastid,3);
	$empid= intval($empid);
	$empid= "CRP" . ($empid + 1);
}
if(!$conn)
{
	die('connection failed : '.$conn->connect_error);
}
else
{

	$stmt="insert into crop(ID, TYPE, NAME, IMAGE, PRICE, QUANTITY, DESCRIPTION, FID)
	values('$cid', '$type', '$cname', '$image', '$price', '$quantity','$description','$fid')";
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
?>
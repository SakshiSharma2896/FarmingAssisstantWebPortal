<?php
session_start();
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
	if($_SERVER["REQUEST_METHOD"]== "POST"){
	$cid= $_POST['cid'];
$type= $_POST['type'];
$cname= $_POST['cname'];
$image= addslashes($_FILES['image']['tmp_name']);
$name= addslashes($_FILES['image']['name']);
$image= file_get_contents($image);
$image= base64_encode($image);
$price= $_POST['price'];
$quantity=$_POST['quantity'];
$description= $_POST['description'];
$fid=$_SESSION['fid'];
$stmt="insert into crop(ID, TYPE, NAME, IMAGE, PRICE, QUANTITY, DESCRIPTION, FID)
	values('$cid', '$type', '$cname', '$image', '$price', '$quantity','$description','$fid')";
$run=mysqli_query($conn,$stmt);
if($run)
{
echo '<script type= "text/javascript"> alert("Crop added successfully!") </script>';	
}
else
{
 echo"unsuccesful" .mysqli_error($conn);
}

}}
?>

<html>
<head>
<title>ADD CROP
</title>
<style>
.bgcolor{
height: 60px;
margin: 0;
background: black;
}
label{width:200px;
display: inline-block;
}
textarea{ vertical-align:top;
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
					
.imgbg{
background-image: url(images/farmerwall3.jpg);
background-position: center center;
background-repeat: no-repeat;
background-attachment: fixed;
background-size: cover;
height: 100%;
width: 100%;
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
		<div class="imgbg">
		
		
		<center><form style="margin-top: 10px;" method="post" action="addcrop.php" enctype="multipart/form-data" >
		<label><b><font size="10">ADD </font></b></label><br><br>
<label><b><font size="5">CROP ID</font></b></label>
<input type="text" placeholder="Enter Crop ID" name="cid" style="width:30%;height:30px" value="<?php echo $empid; ?>"  readonly><br><br>
<label><b><font size="5" style="margin-right:200px;">TYPE</font></b></label>
<select name="type" style="height: 30px; margin-right:170px;">
<option value="all">ALL</option>
<option value="pulse">PULSES</option>
<option value="cereals">CEREALS</option>
<option value="fruits">FRUITS</option>
<option value="vegetables">VEGETABLES</option>
</select><br><br>
<!--<input type="text" placeholder="Enter Crop Type" name="type" style="width:30%;height:30px" required><br><br>-->
<label><b><font size="5">NAME</font></b></label>
<input type="text" placeholder="Enter Crop Name" name="cname" style="width:30%;height:30px" required><br><br>
<label style="margin-right: 140px;"><b><font size="5">IMAGE</font></b></label>
<input type="file" name="image" ><br><br>
<label><b><font size="5">PRICE</font></b></label>
<input type="number" placeholder="Enter Price Per Quantity" name="price" style="width:30%;height:30px" required><br><br>
<label><b><font size="5">QUANTITY</font></b></label>
<input type="number" placeholder="Enter Quantity" name="quantity" style="width:30%;height:30px" required><br><br>
<label><b><font size="5">DESCRIPTION</font></b></label>
<textarea rows="10" cols="40" placeholder="Enter the description of the crop....." name="description" style="margin-left: 20px;">
</textarea><br><br>
<button type="submit" name="add" >ADD</button>
<button type="reset" name="cancel" style="margin-left: 10px;">CANCEL</button>
</div>
</body>
</html>
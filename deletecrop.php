<?php
$conn= mysqli_connect('localhost', 'root', '', 'fawp');
error_reporting(0);
?>

<html>
<head>
<title>DELETE CROP
</title>
<style>
.bgcolor{
height: 60px;
margin: 0;
background: black;
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
                        background-color:red;
                    }
.imgbg{
background-image: url(images/farmerwall3.jpg);
background-position: center center;
background-repeat: no-repeat;
background-attachment: fixed;
background-size: cover;
height: 65%;
width: 100%;
}
label{width:200px;
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
			<?php
	//$fetchQuery = mysqli_query("select * from crop ") or die("could not fetch" . mysql_error());
	$query= "SELECT * from crop ";
	$query_run= mysqli_query($conn, $query) or die("could not fetch" . mysql_error());
	?>	
		
			<div class="imgbg">
			<center><form style="margin-top: 10px;" action="" method="post">
			<label><b><font size="10">DELETE</font></b></label><br><br>
			<?php
			if(isset($_POST['delete'])){
				$key = $_POST['cid'];
				//check if records to delete exist or not
				$check = mysqli_query($conn, "select * from crop where ID='$key'") or die("not found" .mysql_error());
				if(mysqli_num_rows($check)>0){
					//means record found delete it
					$querydelete = mysqli_query($conn,"DELETE from crop where ID= '$key' ") or die("not deleted" .mysql_error());
				?>
					<script>	alert("record deleted!");</script>
				<?php }
				else{
					//give warning record does not exist?>
				<script>	alert("record not found");</script>
				<?php }
			}
			?>
			<label><b><font size="5">CROP ID</font></b></label>
<input type="text" placeholder="Enter Crop ID" name="cid" style="width:20%;height:30px" required><br><br>
<label><b><font size="5">CROP NAME</font></b></label>
<input type="text" placeholder="Enter Crop Name" name="cname" style="width:20%;height:30px" required><br><br><br>
<button type="submit" name="delete" >DELETE</button>
<button type="reset" name="cancel" style="margin-left: 10px;">CANCEL</button>
			</form>
			</center>
			</div>
</body>
</html>
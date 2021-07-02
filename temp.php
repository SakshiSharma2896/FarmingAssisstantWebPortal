<?php
$conn= mysqli_connect('localhost', 'root', '', 'fawp');
error_reporting(0);
?>
<html>
<head>
<title>VIEW CROP
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
                        background-color:black;
						}
						
.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}
.bodybg{
background-image: url(images/buyer1.jpg);
background-position: center center;
background-repeat: no-repeat;
background-attachment: fixed;
background-size: cover;
height: 64%;
width: 100%;
}

</style>
</head>
<body>
<div class="back">
<center><font color="white" face="Garamond" size="20" ><b>FARMING ASSISSTANT WEB PORTAL</b></font></style></center>
</div>
  <div class="navbar bgcolor"> <br>
			<a href="buyerpage.html" style="font-size:28px;color:white;text-decoration:none;font-family:georgian;margin-left:250px;margin-top:-5px">HOME</a>  
			<a href="bprofile.html" style="font-size:28px;color:white;text-decoration:none;margin-left:160px;font-family:georgian">PROFILE</a> 
			<a href="viewcrop.html" style="font-size:28px;color:white;text-decoration:none;margin-left:160px;font-family:georgian">VIEW CROP</a>
    			<a href="logout.php" style="font-size:28px;color:white;text-decoration:none;margin-left:160px;font-family:georgian">LOGOUT</a> 
		</div>
		
	
			<?php
	//$fetchQuery = mysqli_query("select * from crop ") or die("could not fetch" . mysql_error());
	$query= "SELECT * from crop ";
	$query_run= mysqli_query($conn, $query) or die("could not fetch" . mysql_error());
	?>	
		<?php
			$query= "SELECT ID,TYPE,NAME,IMAGE,PRICE, QUANTITY, DESCRIPTION from crop ";
	$query_run= mysqli_query($conn, $query);
	?>
	<div class="imgbg">
			<center><form style="margin-top: 10px;">
			<label><b><font size="15">VIEW CROP</font></b></label><br><br>
		
		<table border=10 bgcolor= 'white'>
			<tr>
				<th>CROP ID</th>
				<th>CROP TYPE</th>
				<th>CROP NAME</th>
				<th>IMAGE</th>
				<th>PRICE</th>
				<th>QUANTITY</th>
				<th>DESCRIPTION</th>
				<th>SELECT</th>
				<th>BUY</th>
			</tr>;
			<?php
		while($row= mysqli_fetch_array($query_run, MYSQLI_ASSOC)){?>
			<tr>
				<form action="" method="post" role= "form">
					<td><?php echo $row['ID']; ?></td>
					<td><?php echo $row['TYPE']; ?></td>
					<td><?php echo $row['NAME']; ?></td>
					<td><?php echo $row['IMAGE']; ?></td>
					<td><?php echo $row['PRICE']; ?></td>
					<td><?php echo $row['QUANTITY']; ?></td>
					<td><?php echo $row['DESCRIPTION']; ?></td>
					<td><input type="checkbox" name="keytodelete" value="<?php echo $row['ID'];?>" required></td>
					<td><input type="submit" name="delete" ></td>
				</form>
				</tr>
				</table>
			</form>
		</center>
	</div>
</body>
</html>
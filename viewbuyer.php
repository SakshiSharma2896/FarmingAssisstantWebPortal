<html>
<head>
<title>VIEW BUYER
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
background-image: url(images/adminwall3.jpg);
background-position: center center;
background-repeat: no-repeat;
background-attachment: fixed;
background-size: cover;
height: 70%;
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
			<center><form style="margin-top: 10px;" action="viewbuyer.php" method="post">
			<label><b><font size="15">BUYER'S LIST</font></b></label><br><br>
			<?php
$conn= mysqli_connect('localhost', 'root', '', 'fawp');
error_reporting(0);
if(!$conn)
{
	die('connection failed : '.$conn->connect_error);
}
else
{
	$query= "SELECT ID,NAME,CONTACT_NO,ADDRESS from buyerregistration ";
	$query_run= mysqli_query($conn, $query);
		echo "<table border=10 bgcolor= 'white'>";
		echo "	<tr>
				<th>BUYER ID</th>
				<th>BUYER NAME</th>
				<th>BUYER CONTACT_NO</th>
				<th>BUYER ADDRESS</th>
				</tr>";
		while($row= mysqli_fetch_array($query_run, MYSQLI_ASSOC)){
			echo "<tr><td>";
			echo $row['ID'];
			echo "</td><td>";
			echo $row['NAME'];
			echo "</td><td>";
			echo $row['CONTACT_NO'];
			echo "</td><td>";
			echo $row['ADDRESS'];
			echo "</td>";
		}
		echo "</table>";
}
?>
			</form>
			</center>
			</div>
</body>
</html>






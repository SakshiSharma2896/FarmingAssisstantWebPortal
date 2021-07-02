<html>
<head>
<title>ADMIN PAGE
</title>
<style>
.bgcolor{
height: 70px;
margin: 0;
background: black;
}
.bodybg{
background-image: url(images/adminwall1.jpg);
background-position: center center;
background-repeat: no-repeat;
background-attachment: fixed;
background-size: cover;
height: 72%;
width: 100%;
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
 .navbar {
  overflow: hidden;
  background-color: none;
  opacity: 1.0;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
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
  padding: 10px 14px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}
					
.imgbg{
background-image: url(images/adminwall1.jpg);
background-position: center center;
background-repeat: no-repeat;
background-attachment: fixed;
background-size: cover;
height: 65%;
width: 100%;
}
</style>
</head>
<body>
<div class="back ">
<center><font color="white" face="Garamond" size="20"><b>FARMING ASSISSTANT WEB PORTAL</b></font></style></center>
</div>
  <div class="navbar bgcolor"> <br>
  
			<a href="adminpage.html" style="font-size:28px;color:white;text-decoration:none;font-family:georgian;margin-left:140px;margin-top:-5px">HOME</a>  
			<!--<a href="fprofilepage.html" style="font-size:28px;color:white;text-decoration:none;margin-left:160px;font-family:georgian">ADD</a> 
			<a href="addcrop.html" style="font-size:28px;color:white;text-decoration:none;margin-left:160px;font-family:georgian">DELETE</a>-->
						    
								    <div class="dropdown">
    <button class="dropbtn" style="font-size:28px;color:white;text-decoration:none;margin-left:120px;font-family:georgian">VIEW
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="viewfarmer.php">FARMER</a>
      <a href="viewbuyer1.php">BUYER</a> 
<a href="viewcropadmin.php">CROP</a>	  
    </div>
  </div>
							
							<div class="dropdown">
    <button class="dropbtn" style="font-size:28px;color:white;text-decoration:none;margin-left:160px;font-family:georgian">ADD 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="addfarmer.php">FARMER</a>
      <a href="addbuyer.php">BUYER</a> 	
    </div>
  </div>
<div class="dropdown">
    <button class="dropbtn" style="font-size:28px;color:white;text-decoration:none;margin-left:160px;font-family:georgian">DELETE 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="deletefarmer.php">FARMER</a>
      <a href="deletebuyer.php">BUYER</a> 	
	  
    </div>
  </div>  
  <a href="homepage.html" style="font-size:28px;color:white;text-decoration:none;font-family:georgian;margin-left:100px;margin-top:-5px">LOGOUT</a>  
		</div>
		
	
			<div class="imgbg">
						<center><form style="margin-top: 10px;"  >
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
	$query= "SELECT * from buyerregistration ";
	$query_run= mysqli_query($conn, $query);
		echo "<table border=10 bgcolor= 'white'>";
		echo "	<tr>
				<th>BUYER ID</th>
				<th>BUYER NAME</th>
				<th>CONTACT_NO</th>
				<th>ADDRESS</th>
				<th>PASSWORD</th>
				<th>CONFIRM PASSWORD</th>
				<th>EMAIL</th>
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
			echo "</td><td>";
			echo $row['PASSWORD'];
			echo "</td><td>";
			echo $row['CONFIRM_PASSWORD'];
			echo "</td><td>";
			echo $row['EMAIL'];
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
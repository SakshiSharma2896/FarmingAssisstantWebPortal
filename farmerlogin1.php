<?php
$conn= mysqli_connect('localhost', 'root', '', 'fawp');
if(!$conn)
{
	die('connection failed : '.$conn->connect_error);
}
else
{
if(isset($_POST['login'])){
	$fid= $_POST['fid'];
	$fpassword= $_POST['fpassword'];
	
	$query= "SELECT * FROM farmerregistration where ID= '$fid' && PASSWORD= '$fpassword'";
	$query_run= mysqli_query($conn, $query);
	$mysqli_result= mysqli_num_rows($query_run);
	if($mysqli_result>0){
		//echo '<script type= "text/javascript"> alert("logged in successful") </script>';
		session_start();
		/*$_SESSION['is_login'] = true;
		$_SESSION['username'] = $fid;
		header('location: fprofilepage.php');*/
		$field= mysqli_fetch_array($query_run);
		$_SESSION['fid']= $field['ID'];
		$_SESSION['fname']= $field['NAME'];
		$_SESSION['fcontact']= $field['CONTACT_NO'];
		$_SESSION['faddress']= $field['ADDRESS'];
		$_SESSION['fpassword']= $field['PASSWORD'];
		$_SESSION['fcpassword']= $field['CONFIRM_PASSWORD'];
		$_SESSION['femail']= $field['EMAIL'];
		header('location: farmerpage.html');
		//echo "<script language=Javascript>document.location.href='fprofilepage.php'</script>";
	}
	else{
	echo '<script type= "text/javascript"> alert("login failed!") </script>';	
	}
}
}
?>
<?php
$conn= mysqli_connect('localhost', 'root', '', 'fawp');
if(!$conn)
{
	die('connection failed : '.$conn->connect_error);
}
else
{
if(isset($_POST['login'])){
	$bid= $_POST['bid'];
	$bpassword= $_POST['bpassword'];
	
	$query= "SELECT * FROM buyerregistration where ID= '$bid' && PASSWORD= '$bpassword'";
	$query_run= mysqli_query($conn, $query);
	$mysqli_result= mysqli_num_rows($query_run);
	if($mysqli_result>0){
		session_start();
		$field= mysqli_fetch_array($query_run);
		$_SESSION['bid']= $field['ID'];
		$_SESSION['bname']= $field['NAME'];
		$_SESSION['bcontact']= $field['CONTACT_NO'];
		$_SESSION['baddress']= $field['ADDRESS'];
		$_SESSION['bpassword']= $field['PASSWORD'];
		$_SESSION['bcpassword']= $field['CONFIRM_PASSWORD'];
		$_SESSION['bemail']= $field['EMAIL'];
		//echo '<script type= "text/javascript"> alert("logged in successful") </script>';
		header('location: buyerpage.html');
	}
	else{
	echo '<script type= "text/javascript"> alert("login failed!") </script>';	
	}
	
}
}
?>
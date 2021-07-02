<?php
if(isset($_POST['login'])){
	$aid= $_POST['aid'];
	$apassword= $_POST['apassword'];
	
	if($aid=="admin" && $apassword=="12345"){
 
 header("location: adminpage.html");
}
else{
echo '<script type= "text/javascript"> alert("login failed!") </script>';	
}
}
?>

<html>
<head>
<title>Pallindrome</title>
</head>
<body>
<form method="post">
Enter a Number: <input type="text" name="num"/>
<br>
<button type="submit">Check</button>
</form>
<?php
if($_POST)
{
 $num=$_POST['num'];
 $reverse= strrev($num);
 if($num==$reverse){
  echo "$num is pallindrome";}
 else{
  echo "$num is not pallindrome";
 
 }
}
?>
</body>
</html>
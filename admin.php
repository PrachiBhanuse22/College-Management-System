<?php
session_start();
	
	$username=$_POST["username"];
	$password=$_POST["password"];
 $username=stripcslashes($username);
 $password=stripcslashes($password);

 $error = "username/password incorrect";

 $conn=new mysqli("localhost","root","","CMS");
 $que="select * from admin where username='$username' and password='$password'";
 $result=$conn->query($que);
 $row = mysqli_fetch_array($result);
 
 if($row['username']==$username && $row['password']==$password){
    echo "welcome ".$username;

 }
 else{
    $_SESSION["error"] = $error;
    header("location: home1.php");
 }

 echo "<html>";
 echo "<head>";
 echo  '<link rel="stylesheet" type="text/css" href="css.css">';
 echo "</head>";
 echo "<body>";
  echo '<form method="POST" action="#">';
 		echo '<input type="submit" name="info" value="Profile" class="button">';
if (isset($_POST["info"])) {
	# code...

 		function info()
{
	echo "Hii";
}}
 	echo "</form>";
 echo "</body>";
 echo "</html>";


?>
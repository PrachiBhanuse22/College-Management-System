<?php
session_start();
	
	$username=$_POST["username"];
	$password=$_POST["password"];
 $username=stripcslashes($username);
 $password=stripcslashes($password);

 $error = "username/password incorrect";

 $conn=new mysqli("localhost","root","","CMS");
 $que="select * from faculty where username='$username' and password='$password'";
 $result=$conn->query($que);
 $row = mysqli_fetch_array($result);
 
 if($row['username']==$username && $row['password']==$password){
    echo "welcome ".$username;
 }
 else{
    $_SESSION["error"] = $error;
    header("location: home2.php");
 }
 ?>
 <html>
 
 </html>
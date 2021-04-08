<?php
session_start();
?>


<html>

<head>
	<title>Welcome to Saraswati Vidyalaya</title>
	<link rel="stylesheet" type="text/css" href="css.css">
	<script type="text/javascript" src=""></script>

</head>
<body >

	
		<table class="t1" ><tr><td align="right" width="550px"><img src="logo.jpg" height="120px" width="120px"></td>
			<td width="970" align="right"><h1 align="left"><strong><font color="white">WELCOME &nbsp; TO  &nbsp;SARASWATI &nbsp; VIDYALAYA</font></strong></h1></td></tr></table>
	
	<div>
<table >
	
	<tr align="top"><td><button >Admin</button></td>
		<td rowspan="4" width="800px"></td>
		<td rowspan="4" width="700px" align="top">
			<div class="login-box">
    		<img src="avatar.png" class="avatar">
        	<h1>Login Here</h1>
           
            <form method="POST" action="student.php">
            <p>Username</p>
            <input type="text" name="username" placeholder="Enter Username">
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter Password">
            <input type="submit" name="submit" value="Login">
            <a href="#">Forget Password</a><br>
            	<?php
                    if(isset($_SESSION["error"])){
                        $error = $_SESSION["error"];
                        echo "<span>$error</span>";
                    }?>  
                
            </form>
            
        
        
        </div>
		</td>
		</tr>
	<tr><td><button>Faculty</button></td></tr>
	<tr><td><button>Student</button></td></tr>
	<tr><td class="xx"></td></tr>

</table>
</div>
</body>
</html>
<?php
    unset($_SESSION["error"]);
?>
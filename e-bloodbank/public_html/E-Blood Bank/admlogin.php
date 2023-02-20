<!DOCTYPE html>
<html>
	
<head>
	<title>Admin Login</title>
		
		<meta charset="utf-8">
	
       	<link href="css/main.css" rel='stylesheet' type='text/css' />
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!--webfonts-->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:600italic,400,300,600,700' rel='stylesheet' type='text/css'>
		<!--//webfonts-->
	

          <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>	
		
		<!-- favicons
	================================================== -->
	<link rel="icon" type="image/png" href="favicon.png">

	
	
</head>
<body>
	
	             
	         
			   	
	
	
	
	
				 <!------------------------------            start of login           ------------------------------------>
				<div class="login-form">
					<div class="head">
						<img src="images/admlogo.png" alt=""/>
						</div>
						
					
				<form name="f1" method="post" action="<?php $_SERVER["PHP_SELF"]?>">
				
					<li>
						<input type="text" class="text" name="email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'EMAIL';}" ><a href="#" class=" icon user"></a>
					</li>
					<li>
						<input type="password" name="pass" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}"><a href="#" class=" icon lock"></a>
					</li>
					
					<table><tr>
                    
                    <td><img src="captcha.php" id="captcha" /></td>
                    </tr>
					
					<tr>
                    
                   
					<td><input class="cap" name="t1" type="text" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter Captcha';}"></td>
                    </tr>
					</table>
					<br><br>
					
					<div class="p-container">
								<label class="checkbox" style="color:#05bca9;"><input type="checkbox" name="checkbox" checked>Remember Me</label>
								
								<input type="submit" name="submit" value="Login" ><br><br><br>
							

							<div class="clear"> </div>
					</div>
				</form>
			</div>
			<!--//----------------------------------------   End-login-form  -------------------------------------------------------------------->
		
   					
		 		
</body>
</html>



















<?php

// establishing the MySQLi connection

 

$con = mysqli_connect("mysql.hostinger.in","u161337547_root","43835646","u161337547_blood");

if (mysqli_connect_errno())

{

echo "MySQLi Connection was not established: " . mysqli_connect_error();

}

// checking the user

if(isset($_POST['submit'])){

$email = mysqli_real_escape_string($con,$_POST['email']);

$pass = mysqli_real_escape_string($con,$_POST['pass']);

$sel_user = "select * from admin where  email='$email' AND password='$pass'";

$run_user = mysqli_query($con, $sel_user);

$check_user = mysqli_num_rows($run_user);

if($check_user>0){

$_SESSION['email']=$email;

echo "<script>window.open('admindex.html','_self')</script>";

}

else {

echo "<script>alert('Invalid Credentials, try again!')</script>";

}

}

?>









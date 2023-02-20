<html>
<head>
<title>My Profile</title>
<link rel="stylesheet" type="text/css" href="link.css">
<style type="text/css">
#td1
{
font-family:Comic Sans MS;
text-align:center;
color:#000;
font-size:17;
}

#back{
background-color:#b1d2f3;
}

<td id="td1" ><b>Message:</b></td>
<td><textarea name="message"></textarea></td>
<br>
<br>
<td><input type="submit" name="submit" value="Submit"></td>

</style>
</head>
<body>

<form method="post" action="<?php $_SERVER["PHP_SELF"]?>" name="form" enctype="multipart/form-data">
<center>
<table id="back" cellspacing="20" cellpadding="5">
<br>
<h1 align="center">Make a Post</h1>
<tr>
<td id="td1" ><b>Name:</b></td>
<td><input type="text" name="name"></td>
</tr>
<tr>
<td id="td1" ><b>Message:</b></td>
<td><textarea name="message" rows="10" cols="80"></textarea></td>
<br>
<br>
<td><input type="submit" name="submit" value="Submit"></td>

</tr>
</table>


</center>
</form>
</body>
</html>








<!-- INSERTING INTO DATABASE --> 
  
  
  
  
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
//database connection
$servername = "mysql.hostinger.in";
$username = "u161337547_root";
$password = "43835646";
$dbname = "u161337547_blood";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$var1 = mysqli_real_escape_string($conn, $_POST['name']);
$var2 = mysqli_real_escape_string($conn, $_POST['message']);



$sql = "INSERT INTO post (name,message)
VALUES ('$var1','$var2')";

if (mysqli_query($conn, $sql)) 
{
        
      echo '<script type="text/javascript">'; 
      echo 'alert("Hurray ! Successfully Posted.");'; 
	  echo 'alert("You can now see your post in home page");'; 
	  echo 'window.location.href = "home.php";';
      echo '</script>';
 require("home.php");

} 
else 
{
   echo "<script>alert('Invalid Details!')</script>";
}
mysqli_close($conn);
}
?>    
  





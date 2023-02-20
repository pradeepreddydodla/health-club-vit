<?php
session_start();
//extract($_POST);
if(isset($_POST['submit'])){
$dbhost = "mysql.hostinger.in";
$dbuser = "u161337547_root";
$dbpass = "43835646";
$conn = mysqli_connect($dbhost, $dbuser, $dbpass,"u161337547_blood");
if(!$conn)
{
die('Could not connect: ' . mysqli_error($conn));
}
$a=$_POST["email"];

//$uname = $_POST['field1'];
//if($_SESSION["login_user"]{
$sql= "delete from register where email='$a';";
}
if(mysqli_query($conn,$sql))
{
echo "<script>alert('Successfully Deleted !')</script>";

}
else
{
echo "<script>alert('Invalid Details!')</script>";
}
?>


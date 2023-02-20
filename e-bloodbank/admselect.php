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
$b=$_POST["pass"];
//$uname = $_POST['field1'];
//if($_SESSION["login_user"]{
$sql= "select * from admin where email='$a' and password='$b';";
}
$res = mysqli_query($conn,$sql);
while($num = mysqli_fetch_assoc($res)){
echo "<br>";
echo "<br>";
echo "<table border=1 align=center cellspacing=15 cellpadding=10 bgcolor=#b1d2f3>";
echo "<form>";

echo "<tr>";
echo "<td>";
echo "<b>Email:</b>";
echo "</td>";
echo "<td>";
echo $num['email'];
echo "</td>";
echo "</tr>";
echo "<tr>";
echo "<td>";
echo "<b>Password:</b>";
echo "</td>";
echo "<td>";
echo $num['password'];
echo "</td>";
echo "</tr>";
echo "<tr>";
echo "<td>";
echo "<b>Designation</b>";
echo "</td>";
echo "<td>";
echo $num['designation'];
echo "</td>";
echo "</tr>";

echo "</form>";
echo "</table>";
echo "<br>";
echo "<br>";
}
?>


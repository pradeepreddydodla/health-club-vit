<?php
session_start();
//extract($_POST);
if(isset($_POST['submit'])){
$servername = "mysql.hostinger.in";
$username = "u161337547_root";
$password = "43835646";
$dbname = "u161337547_blood";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
if(!$conn)
{
die('Could not connect: ' . mysqli_error($conn));
}
$a=$_POST["email"];
$b=$_POST["pass"];
//$uname = $_POST['field1'];
//if($_SESSION["login_user"]{
$sql= "select * from register where email='$a' and password='$b';";
}
$res = mysqli_query($conn,$sql);
while($num = mysqli_fetch_assoc($res)){
echo "<br>";
echo "<br>";
echo "<table border=1 align=center cellspacing=10 cellpadding=5 bgcolor=#b1d2f3>";
echo "<form>";
echo "<tr>";
echo "<td>";
echo "<b>Name:</b>";
echo "</td>";
echo "<td>";
echo $num['name'];
echo "</td>";
echo "</tr>";
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
echo "<b>Gender:</b>";
echo "</td>";
echo "<td>";
echo $num['gender'];
echo "</td>";
echo "</tr>";
echo "<tr>";
echo "<td>";
echo "<b>Age: (18+)</b>";
echo "</td>";
echo "<td>";
echo $num['age'];
echo "</td>";
echo "</tr>";
echo "<tr>";
echo "<td>";
echo "<b>Mobile:</b>";
echo "</td>";
echo "<td>";
echo $num['mobile'];
echo "</td>";
echo "</tr>";
echo "<tr>";
echo "<td>";
echo "<b>Address:</b>";
echo "</td>";
echo "<td>";
echo $num['address'];
echo "</td>";
echo "</tr>";
echo "<tr>";
echo "<td>";
echo "<b>Blood Donor:</b>";
echo "</td>";
echo "<td>";
echo $num['blood_donor'];
echo "</td>";
echo "</tr>";
echo "<tr>";
echo "<td>";
echo "<b>Blood Group:</b>";
echo "</td>";
echo "<td>";
echo $num['blood_group'];
echo "</td>";
echo "</tr>";
echo "</form>";
echo "</table>";
echo "<br>";
echo "<br>";
}
?>
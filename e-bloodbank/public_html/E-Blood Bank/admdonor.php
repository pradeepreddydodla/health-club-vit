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
$a=$_POST["bloodgroup"];

//$uname = $_POST['field1'];
//if($_SESSION["login_user"]{
$sql= "select name,email,age,mobile,address from register where blood_group='$a' and blood_donor='yes';";
}
$res = mysqli_query($conn,$sql);
echo "<br>";
echo "<br>";
echo "<table border='1'  align='center' width='100%'  bgcolor=#b1d2f3>";
echo "<tr>";
echo "<td>";
echo "<b>Name:</b>";
echo "</td>";
echo "<td>";
echo "<b>Email:</b>";
echo "</td>";
echo "<td>";
echo "<b>Age: (18+)</b>";
echo "</td>";
echo "<td>";
echo "<b>Mobile:</b>";
echo "</td>";
echo "<td>";
echo "<b>Address</b>";
echo "</td>";
echo "</tr>";

while($num = mysqli_fetch_assoc($res)){





echo "<tr>";
echo "<td>";
echo $num['name'];
echo "</td>";



echo "<td>";
echo $num['email'];
echo "</td>";


echo "<td>";
echo $num['age'];
echo "</td>";




echo "<td>";
echo $num['mobile'];
echo "</td>";



echo "<td>";
echo $num['address'];
echo "</td>";
echo "</tr>";

}
echo "</table>";
echo "<br>";
echo "<br>";

?>


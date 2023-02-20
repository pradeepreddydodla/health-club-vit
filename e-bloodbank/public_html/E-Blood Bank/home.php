


<?php


$dbhost = 'mysql.hostinger.in';
$dbuser = "u161337547_root";
$dbpass = '43835646';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass,'u161337547_blood');
if(!$conn)
{
die('Could not connect: ' . mysqli_error($conn));
}


$sql= "select * from post;";

$res = mysqli_query($conn,$sql);

echo "<br>";
echo "<h3 align='center'>";
echo "BLOOD REQUESTS:";
echo "</h3>";


while($num = mysqli_fetch_assoc($res)){


echo "<br>";
echo "<br>";
echo "<div style='width: 960px; color: navy; background-color: pink; border: 2px solid blue; padding:5px;'>";
echo "<b>";
echo "Name: ";
echo "</b>";
echo $num['name'];

echo "<br>";
echo "<br>";
echo "<b>";
echo "Message:";
echo "</b>";
echo "<br>";
echo "<br>";
echo $num['message'];
echo "</div>";
echo "<br>";
echo "<br>";
}
?>


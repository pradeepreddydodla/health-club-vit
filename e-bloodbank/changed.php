<?php 
$name=$_POST['name'];
$pass=$_POST['pass']; 
$change=$_POST['change'];
$patt1='/^[a-z A-Z]*$/';
$patt2='/^[a-zA-Z][0-9a-zA-Z_!$@#^&]{5,20}$/';
$patt3='/^[A-Za-z0-9]{4,20}$/';/*|| '/^[a-zA-Z][0-9a-zA-Z_!$@#^&]{5,20}$/';*/
function patt1($patt1,$name){
if(!preg_match($patt1,$name)){
echo "Please enter the valid name<br>";
}
else
	return true;
}
function patt2($patt2,$pass){
if(!preg_match($patt2,$pass)){
echo "Please enter the valid password";
}
else
	return true;
	
}
function patt3(){
	if($_POST['select']=="-1"){
		echo "please select something";
	}
	else 
		return true; 	
}
function patt4($patt3,$change){
if(!preg_match($patt3,$change)){
echo "Please enter the valid value";
}
else
	return true;
	
}
if(patt1($patt1,$name)){	
if(patt2($patt2,$pass)){
if(patt3()){
if(patt4($patt3,$change)){	
$dbhost = 'mysql.hostinger.in';
$dbuser = "u161337547_root";
$dbpass = '43835646'; 
$conn = mysqli_connect($dbhost, $dbuser, $dbpass,'u161337547_blood'); 
if(!$conn) { 
die('Could not connect: ' . mysqli_error()); 
}

$sql = "update register set password='$change' where name='$name' and password='$pass'"; 

$rs = mysqli_query($conn,$sql); 
if(!$rs) 
{ 
die('Could not update data: '.mysqli_error($conn)); 
} 
echo "<b>";
echo "Password updated successfully";
echo "</b>";
}}}}
?>


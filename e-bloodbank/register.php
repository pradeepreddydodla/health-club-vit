<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Register</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  <link rel="shortcut icon" href="favicon.png" />
      <link rel="stylesheet" href="css/registerstyle.css">

  
</head>




<?php
// define variables and set to empty values
$nameErr = $emailErr = $passErr  = $genderErr =  $ageErr = $mobileErr = $addErr = $decisionErr = $bloodgroupErr = "";
$name = $email = $pass = $gender = $age = $mobile = $add = $decision = $bloodgroup = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{

//name validation

  if (empty($_POST["name"]))
 {
	$nameErr = "Please enter your name";
  } 
else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name))
 {
      $nameErr = "Only alphabets and white spaces allowed"; 
    }
  }

  
  
  //email validation
  
if (empty($_POST["email"]))
 {
    $emailErr = "Please enter your email";
  } 
else
 {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  }
  
  
  
  
  
//password validation

if (empty($_POST["pass"]))
 {
    echo "<script>alert('Please enter your password')</script>";
    $passErr = "Please enter your password";
  } 
else {
    $pass = test_input($_POST["pass"]);
    // check if  only contains alphachars,numericals and some special characters 
    if (!preg_match("/^[a-zA-Z][0-9a-zA-Z_!$@#^&]{5,20}$/",$pass))
 {
      $passErr = "Only password of format (Rahulchc3,Gokulvhc,Manikpc3) allowed"; 
    }
  }

  

//gender validation


if (empty($_POST["gender"])) {
    $genderErr = "Please select your gender";
  } else {
    $gender = test_input($_POST["gender"]);
  }

  
  
  
  //age validation

if (empty($_POST["age"])) {
    $ageErr = "Please select your age";
  } else {
    $age = test_input($_POST["age"]);
  }

  
  
  
  

//mobile no validation

 if (empty($_POST["mobile"]))
 {
    $mobileErr = "Please enter your mobile number";
  } 
else {
    $mobile = test_input($_POST["mobile"]);
    
// check if mobile no is numbers only.

    if (!preg_match("/^[0-9]{10}$/",$mobile))
 {
      $mobileErr = "Only Numbers and Max 10 allowed"; 
    }
  }
  
  
  
  
  
//Address Validation


if (empty($_POST["add"])) {
    $addErr = "Please enter your address";
  } else {
    $add = test_input($_POST["add"]);
  }


  

//Blood donor validation

if (empty($_POST["decision"])) {
   $decisionErr = "Please select your decision"; 
  } else {
    $decision = test_input($_POST["decision"]);
  }  

 


//Blood group validation

if (empty($_POST["bloodgroup"]))
 {
    $bloodgroupErr = "Please select your blood group";
  } else {
    $bloodgroup = test_input($_POST["bloodgroup"]);
  }  


 
}


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


?>




 <body bgcolor="#40A9DF">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sign Up Form</title>
       
        <link href='http://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
       
    </head>
    <body >

     <form name="form" action="<?php $_SERVER["PHP_SELF"]?>" method="post" enctype="multipart/form-data">
      
        <h1>Register Here</h1>
        <br>
        <fieldset>
          <legend><span class="number">1</span>Your Basic Info</legend><br>
          <label for="name">Name:</label>
          <input type="text" id="name" name="name" value="Ex: Rahul Chevvuri" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Ex: Rahul Chevvuri';}">
		  <font color="red"><span class="error"><?php echo $nameErr;?></span></font>
          <br><br>
          
		  <label for="mail">Email:</label>
          <input type="email"  name="email" value="Ex: rahulchevvuri@gmail.com" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Ex: rahulchevvuri@gmail.com';}">
		  <font color="red"><span class="error"> <?php echo $emailErr;?></span></font>
          <br><br>
		  
          <label for="password">Password: (Ex: Rahulvit3)</label>
          <input type="password"  name="pass" >
          <font color="red"><span class="error"> <?php echo $passErr;?></span></font>
		  <br><br>
		  
		  <label>Gender:</label>
          <input type="radio"  value="male" name="gender"><label for="male" class="light">Male</label>&nbsp;&nbsp;
		  <input type="radio"  value="female" name="gender"><label for="female" class="light">Female</label><br>
         <font color="red"><span class="error"> <?php echo $genderErr;?></span></font> 
		  <br><br>
		  
		<label>Age:&nbsp;(18 +)</label>
          <input type="radio"  value="yes" name="age"><label for="over_18" class="light">Yes</label>&nbsp;&nbsp;
		  <input type="radio"  value="no" name="age"><label for="over_18" class="light">No</label><br>
		  <font color="red"><span class="error"> <?php echo $ageErr;?></span></font>
		  <br><br>
		  
		   <label for="name">Mobile:</label>
          <input type="text"  name="mobile" value="Ex: 9996370688" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Ex: 9996370688';}" >
		  <font color="red"><span class="error"> <?php echo $mobileErr;?></span></font>
		  <br><br>
		   
          <label for="add">Address:</label>
          <textarea  name="add" value="Ex: Vellore,Tamil Nadu" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Ex: Vellore,Tamil Nadu';}"></textarea>
		  <font color="red"><span class="error"> <?php echo $addErr;?></span></font>
		  <br><br>
        </fieldset>
        
		
        <fieldset>
         <legend><span class="number">2</span>Donation Details</legend><br>
       
	     <label>Want to become a blood donor?</label>
          <input type="radio"  value="yes" name="decision"><label for="decision" class="light">Yes</label>&nbsp;&nbsp;
		  <input type="radio"  value="no" name="decision"><label for="decision" class="light">No</label><br>
		  <font color="red"><span class="error"> <?php echo $decisionErr;?></span></font>
		  <br><br>
		  
        <label for="bloodgroup">Blood Group:</label>
        <select name="bloodgroup">
            <option value="">--Select--</option>
            <option value="O-">O-</option>
            <option value="O+">O+</option>
            <option value="A-">A-</option>
            <option value="A+">A+</option>
            <option value="B-">B-</option>
            <option value="B+">B+</option>
			<option value="AB-">AB-</option>
            <option value="AB+">AB+</option>
          
        </select>
		<font color="red"><span class="error"> <?php echo $bloodgroupErr;?></span></font>
        <br><br>
		</fieldset>
        <button type="submit">Register</button>
      </form>
      
    </body>
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
$var2 = mysqli_real_escape_string($conn, $_POST['email']);
$var3 = mysqli_real_escape_string($conn, $_POST['pass']);
$var4 = mysqli_real_escape_string($conn, $_POST['gender']);
$var5 = mysqli_real_escape_string($conn, $_POST['age']);
$var6 = mysqli_real_escape_string($conn, $_POST['mobile']);
$var7 = mysqli_real_escape_string($conn, $_POST['add']);
$var8 = mysqli_real_escape_string($conn, $_POST['decision']);
$var9 = mysqli_real_escape_string($conn, $_POST['bloodgroup']);


$sql = "INSERT INTO register (name,email,password,gender,age,mobile,address,blood_donor,blood_group)
VALUES ('$var1','$var2','$var3','$var4','$var5','$var6','$var7','$var8','$var9')";

if (mysqli_query($conn, $sql)) 
{
        
      echo '<script type="text/javascript">'; 
      echo 'alert("Hurray ! Successfully Registered.");'; 
	  echo 'alert("You can now login with your Email id and Password");'; 
	  echo 'window.location.href = "login.php";';
      echo '</script>';
 /**
 * This example shows settings to use when sending via Google's Gmail servers.
 */

//SMTP needs accurate times, and the PHP time zone MUST be set
//This should be done in your php.ini, but this is how to do it if you don't have access to that
date_default_timezone_set('Asia/Calcutta');

require 'phpmailer/PHPMailerAutoload.php';

//Create a new PHPMailer instance
$mail = new PHPMailer;

//Tell PHPMailer to use SMTPss
$mail->isSMTP();

//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 0;

//Ask for HTML-friendly debug output
$mail->Debugoutput = 'html';

//Set the hostname of the mail server
$mail->Host = 'smtp.gmail.com';
// use
// $mail->Host = gethostbyname('smtp.gmail.com');
// if your network does not support SMTP over IPv6

//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 587;

//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'tls';

//Whether to use SMTP authentication
$mail->SMTPAuth = true;

//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = 'admdirector.healthclub@gmail.com';

//Password to use for SMTP authentication
$mail->Password = 'administrationhc';

//Set who the message is to be sent from
$mail->setFrom('admdirector.healthclub@gmail.com', 'TEAM-HC');

//Set an alternative reply-to address
$mail->addReplyTo($var2, '');

//Set who the message is to be sent to
$mail->addAddress($var2, '');

//Set the subject line
$mail->Subject ='Successfully Registered !';

//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$mail->msgHTML( 'Successfully Registered. Thank You!', dirname(__FILE__));

//Replace the plain text body with one created manually
$mail->AltBody = 'Successfully Registered. Thank You!';

//Attach an image file
//$mail->addAttachment('images/phpmailer_mini.png');

//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
}
 else {
    
}


} 
else 
{
   echo "<script>alert('Invalid Details!')</script>";
}
mysqli_close($conn);
}
?>    
  
  
  
  
  
  
  
  
  
  

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



</style>
</head>
<body>

<form method="post" action="generaldonor.php" name="form" enctype="multipart/form-data">
<center>
<table id="back" cellspacing="20" cellpadding="5">
<tr>
<td id="td1" ><b>Select your Blood Group:</b></td>

<td>
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
</td>
<br>
<br>
<td><input type="submit" name="submit" value="Submit"></td>
</tr>
</table>
</center>
</form>
</body>
</html>













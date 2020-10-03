<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "hub_db";



$conn = new mysqli($servername,$username,$password,$database);

if(!$_POST['uname']){
 		die('You did not fill in a username.');
 	}
if(!$_POST['email']){
 		die('You did not fill in a password.');
 	}
if(!$_POST['phone']){
 		die('You did not fill in a username.');
 	}
if(!$_POST['upwd']){
 		die('You did not fill in a password.');
 	}

$uname = $_REQUEST["uname"];
$email = $_REQUEST["email"];
$phone = $_REQUEST["phone"];
$upwd = $_REQUEST["upwd"];

$sql = "insert into register(uname,email,phone,upwd) values ('$uname','$email','$phone','$upwd')";
if ($conn->query($sql) === TRUE ) {
echo "Registered successfully <br>";
} else {
echo "ERror: ". $sql ."<br>" . $conn->error;
}
$keyword=$_REQUEST['uname'];
$sql1 = "SELECT fid from register where uname like '%$keyword%'";
$result = $conn->query($sql1);
$row = $result->fetch_assoc();
echo "Your Faculty id is: $row[fid]";
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="gmstyle.css">

</head>
<body>

<div class="header">
  <h1>YOUR GUIDER</h1>
  <p style="color: blue"><b>Learn from home</b></p>
</div>


<ul>
<li><a href="faculty.php">Home</a></li>
<li><a href="videoreg.html">upload videos</a></li>
<li><a href="/vhub/vhub/upload_file.php">upload Notes</a></li>

<li><a href="logout.php">Logout</a></li>
</ul>
</div>
<div class="vmpeo">
<p style="text-align:center; font-size:20px;">Registered successfuly</p><br>
</div>
</div>

</body>
</html>

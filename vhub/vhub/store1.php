<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "hub_db";

$conn = new mysqli($servername,$username,$password,$database);

if(!$_POST['url']){
 		die('You did not fill in a username.');
 	}
 	
if(!$_POST['keyword']){
 		die('You did not fill in a password.');
 	}

$url = $_REQUEST["url"];
$keyword = $_REQUEST["keyword"];
$sql = "insert into videos(url,keyword) values ('$url','$keyword')";

if ($conn->query($sql) === TRUE ) {
echo "Video uploaded successfully";
} else {
echo "ERror: ". $sql ."<br>" . $conn->error;
}
$conn->close();
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="gmstyle.css">

</head>
<body>

<div class="header">
  <h1>Lecture Videos Hub</h1>
  <p>Learn with lecture videos</p>
</div>

<ul>
<li><a href="index.html">Home</a></li>
<li><a href="videoreg.html">Upload video</a></li>
<li><a href="logout.php">Logout</a></li>
</ul>

<center>
</div>
<div class="vmpeo">
<p style="text-align:center; font-size:20px;">uploaded successfuly</p><br>
</div>
</div>
//<h1>Upload videos</h1>


</center>

</body>
</html> 
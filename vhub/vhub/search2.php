<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="gmstyle.css">

</head>
<body>

<div class="header">
  <h1>Lecture  Hub</h1>
  <p>Learn with lecture Videos and Notes</p>
</div>

<ul>
<li><a href="index.html" target="_self">Home</a></li>
<li class="dropdown">
<a href="javascript:void(0)"
class="dropbtn">Students</a>
<div class="dropdown-content">
<a href="login.html">login</a>
<a href="register.html">register</a>
</div>
</li>
<li><a href="about.html">About Us</a></li>
<li><a href="contact.html">Contact</a></li>
</ul>

<div class="button_box2" align=center>
<form class="form-wrapper-2 cf" action="search2.php" method="POST">
        <input type="text" name="searchkey">
        <button type="submit">Search</button>
</form>
</div>
<div align=center>
<?php
$servername = "localhost";
$username = "id14324599_root";
$password = "!gUd84u%JHbuyms<";
$dbname = "id14324599_hub_db";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$keyword=$_REQUEST['searchkey'];
$sql = "SELECT * from videos where keyword like '%$keyword%'";
$result = $conn->query($sql);


       echo "<table>";
       //output data of each row
       $i=1;
    
        while($row = $result->fetch_assoc()) {
           echo "<tr><td>lecture:$i <br></td>";
           $i++;
           echo "<td><a href='$row[url]' target='_blank'>$row[keyword]</a></td></tr>";
         } 
    echo "</table>";

$keyword=$_REQUEST['searchkey'];
$sql = "SELECT * from files where keyword like '%$keyword%'";
// $file_name= "SELECT file from files  where keyword like '%$keyword%'";
// echo ($file_name);
$result = $conn->query($sql);


       echo "<table>";
       //output data of each row
       $i=1;
    
        while($row = $result->fetch_assoc()) {
           echo "<tr><td>lecture:$i <br></td>";
           $i++;
           echo "<td><a href='uploads/$row[name]' download>$row[name]</a></td></tr>";
         } 
    echo "</table>";

$conn->close();
?>
</div>
</div>
</body>
</html>



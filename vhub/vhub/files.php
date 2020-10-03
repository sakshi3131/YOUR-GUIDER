<?php
$servername = "localhost";
$username = "id14324599_root";
$password = "!gUd84u%JHbuyms<";
$database = "id14324599_hub_db";



$conn = new mysqli($servername,$username,$password,$database);

$uploadThisFile = true;
			
			$file=$_FILES["file"]["name"][$key];
			$file_tmp=$_FILES["files"]["tmp_name"][$key];
			$keyword=$_REQUEST["keyword"];
			
			$ext=pathinfo($file_name,PATHINFO_EXTENSION);

			
			if($uploadThisFile){
				$filename=basename($file_name,$ext);
				$newFileName=$filename.$ext;				
				move_uploaded_file($_FILES["files"]["tmp_name"][$key],"Upload/".$newFileName);
				
				
				
				mysqli_query($conn, $query);			
			}
			$query = "INSERT INTO files(filename,file,keyword) VALUES('Upload','".$newFileName."',$keyword)";
			mysqli_close($conn);
		
		$count = count($errors);
		
		
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
<li><a href="index.html">Home</a></li>
<li><a href="videoreg.html">Upload videos of projects</a></li>
<li><a href="upload_file.php">Upload/Assignments Notes</a></li>
<li><a href="source.html">Videos &  Notes</a></li>
<li><a href="quiz.html">Quiz,Grammer& GK</a></li><li><a href="logout.php">Logout</a></li>
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
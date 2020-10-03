
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
<li><a href="videoreg.html">Upload videos of projects</a></li>
<li><a href="logout.php">Logout</a></li>
</ul>

<center>
<div class="login-box">
        <form action="filesLogic.php" method="post" enctype="multipart/form-data" >
          <h3>Upload File</h3>
          <input type="file" name="myfile"> <br>
           <input type="text" name="keyword"> <br>
          <button type="submit" name="save">upload</button>
        </form>
      </div>
      </center>

</body>
</html>

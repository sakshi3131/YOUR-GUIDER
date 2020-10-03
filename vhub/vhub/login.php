<?php
 echo "<link rel='stylesheet' type='text/css' href='../web.css'>";
 ?>
 
<?php 
echo "<html>";

echo "<body>";

echo "<div class='header'>";

echo "<h1>Login</h1>";
echo "</div>";
echo "</body>";
echo "<html>";


//Connects to your Database 
$conect = mysqli_connect("localhost","id14324599_root","!gUd84u%JHbuyms<","id14324599_hub_db") or die(mysql_error()); 



 //if the login form is submitted 
 if (isset($_POST['submit'])) {

	// makes sure they filled it in
 	if(!$_POST['uname']){
 		die('You did not fill in a username.');
 	}
 	if(!$_POST['upwd']){
 		die('You did not fill in a password.');
 	}

 	 	$check = mysqli_query($conect, "SELECT * FROM faculty WHERE uname =".$_POST['uname']."'");

 //Gives error if user dosen't exist
 $check2 = mysqli_num_rows($check);
 if ($check2 == 0){
	die('That user does not exist in our database.<br /><br />If you think this is wrong <a href="login.php">try again</a>.');
}

while($info = mysqli_fetch_array( $check )){
	$_POST['upwd'] = stripslashes($_POST['upwd']);
 	$info['upwd'] = stripslashes($info['upwd']);
 	//$_POST['upwd'] = md5($_POST['upwd']);

	//gives error if the password is wrong
 	if ($_POST['upwd'] != $info['upwd']){
 		die('Incorrect password, please <a href="login.php">try again</a>.');
 	}
	
	else{ // if login is ok then we add a cookie 
		$_POST['uname'] = stripslashes($_POST['uname']); 
		$hour = time() + 3600; 
		setcookie(ID_your_site, $_POST['uname'], $hour); 
		setcookie(Key_your_site, $_POST['upwd'], $hour);	 
 
		//then redirect them to the members area 
		header("Location: aindex.php"); 
	}
}
}
else{
// if they are not logged in 
?>



<center>

 <form action="url.php" method="post"> 
 
 <table border="0"> 

 <tr><td >Username:</td><td> 

 <input type="text" name="uname" maxlength="40"> 

 </td></tr> 

 <tr><td>Password:</td><td> 

 <input type="password" name="upwd" maxlength="50"> 

 </td></tr> 

 <tr><td colspan="2" align="right"> 

 <input type="submit" name="submit" value="Login"> 

 </td></tr> 

 </table> 

 </form> 
 </center>

 <?php 
 }
 ?> 
 


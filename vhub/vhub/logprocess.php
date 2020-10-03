<?php 
//Connects to your Database 
$conect = mysqli_connect("localhost","id14324599_root","!gUd84u%JHbuyms<", "id14324599_hub_db") or die(mysql_error()); 
//echo "hi";
 //if the login form is submitted 
 //if (isset($_POST['submit'])) {

	// makes sure they filled it in
 	if(!$_POST['uname']){
 		die('You did not fill in a username.');
 	}
 	if(!$_POST['upwd']){
 		die('You did not fill in a password.');
 	}
$sql1 = "SELECT * FROM register WHERE uname = '$_POST[uname]'";
$check = mysqli_query($conect, $sql1);

 //Gives error if user dosen't exist
 $check2 = mysqli_num_rows($check);
 if ($check2 == 0){
	die('That user does not exist in our database.<br /><br />If you think this is wrong <a href="login.html">try again</a>.');
}

while($info = mysqli_fetch_array( $check )){
	$_POST['upwd'] = stripslashes($_POST['upwd']);
 	$info['upwd'] = stripslashes($info['upwd']);
 	//$_POST['upwd'] = md5($_POST['upwd']);

	//gives error if the password is wrong
 	if ($_POST['upwd'] != $info['upwd']){
 		die('Incorrect password, please <a href="login.html">try again</a>.');
 	}
	
	else{ // if login is ok then we add a cookie 
		$_POST['uname'] = stripslashes($_POST['uname']); 
		//$hour = time() + 3600; 
		//setcookie(ID_your_site, $_POST['uname'], $hour); 
		//setcookie(Key_your_site, $_POST['upwd'], $hour);	 
 
		//then redirect them to the members area 
		header("Location: faculty.php"); 
	}
}
?>

<?php
ob_start();

include 'SQLs/Select-DB.php';

$tbl_name="salesperson"; // Table name

$host="localhost"; // Host name 
	$username="root"; 		// Mysql username 
	$password=""; 			// Mysql password 
	

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

// Define $myusername and $mypassword
 
$myusername=$_POST['myusername']; 
$mypassword=$_POST['mypassword'];


// Add slashes to the username, and make a md5 checksum of the password. 
$_POST['myusername'] = addslashes($_POST['myusername']); 
$_POST['mypassword'] = md5($_POST['mypassword']); 


// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);

$sql="SELECT UserName FROM $db_name.$tbl_name WHERE username='$myusername' and password='$mypassword'";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);
// If result matched $myusername and $mypassword, table row must be 1 row
 
 	
if($count>0) {
 	//Login Successful
 	//Regenerate session ID to prevent session fixation attacks

 	 	
	session_start(); 

// We've already added slashes and MD5'd the password 
	$_SESSION['myusername'] = $_POST['myusername']; 
	$_SESSION['mypassword'] = $_POST['mypassword'];

 header('Location: Enquiries.php'); 
 }
 
 else
 {
 $_SESSION['Error'] = "Invalid Username or Password. Please try again.";
  header('Location: Login.php'); 
 }
  


ob_end_flush();


?>


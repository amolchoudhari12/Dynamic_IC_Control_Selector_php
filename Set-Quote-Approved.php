<?php
	
	ob_start();
	
	include 'SQLs/Select-DB.php';


	// Connect to server and select databse.
	$linkID = mysql_connect($host, $username, $password) or die("Could not connect to host."); 
	mysql_select_db($db_name, $linkID) or die("Could not find database."); 

	
	//Adding Customer in MySQL
	$query = "update  $db_name.otek_customerquote
				  set quotestatus = 3 where customerquoteid = $qid";
	$resultID = mysql_query($query, $linkID) or die("Error while updating customer quote status"); 
		
	
?>


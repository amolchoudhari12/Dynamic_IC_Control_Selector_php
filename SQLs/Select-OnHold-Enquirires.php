<?php
	
	ob_start();
	
	include 'SQLs/Select-DB.php';
	


	// Connect to server and select databse.
	$linkID = mysql_connect($host, $username, $password) or die("Could not connect to host."); 
	mysql_select_db($db_name, $linkID) or die("Could not find database."); 

	
	
	//Adding Customer in MySQL
	$query = "select Customer_RFQ_id ,OTEK_Customer.CustomerID, OTEK_Customer.CustomerName, CustomerName,ModelName , RFQDetails, RFQStatusID
			  from $db_name.OTEK_Customer , 
				   $db_name.OTEK_Customer_RFQ, 
				   $db_name.OTEK_RFQDetails
			  where 
			  	  $db_name.OTEK_Customer.CustomerID = $db_name.OTEK_Customer_RFQ.CustomerID
			  AND 
				   $db_name.OTEK_Customer_RFQ.RFQDetailsID = $db_name.OTEK_RFQDetails.RFQDetailsID
			  AND
				   $db_name.OTEK_Customer_RFQ.RFQStatusID = 4";
	
	
	
	$result = mysql_query($query, $linkID) or die("Error while selecting RFQ Enquiries."); 
	
	return $result;

?>


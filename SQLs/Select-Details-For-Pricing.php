<?php
	
	ob_start();
	
	include 'SQLs/Select-DB.php';
 
	$id =1;
	if(isset($_GET['type']))
	    if($_GET['type']=="onhold")
	 		$id=4;

	// Connect to server and select databse.
	$linkID = mysql_connect($host, $username, $password) or die("Could not connect to host."); 
	mysql_select_db($db_name, $linkID) or die("Could not find database."); 

	
	//Adding Customer in MySQL
	$query = "select Customer_RFQ_id ,OTEK_Customer.CustomerID, OTEK_Customer.CustomerName, Email,
					 CustomerName,ModelName , RFQDetails,RFQStatusID, Quantities
			  from $db_name.OTEK_Customer , 
				   $db_name.OTEK_Customer_RFQ,
				   $db_name.OTEK_RFQDetails
			  where
			  	   $db_name.OTEK_Customer.CustomerID = $db_name.OTEK_Customer_RFQ.CustomerID
			  AND 
				   $db_name.OTEK_Customer_RFQ.RFQDetailsID = $db_name.OTEK_RFQDetails.RFQDetailsID
			  AND
				   $db_name.OTEK_Customer_RFQ.RFQStatusID = $id
      		  AND $db_name.OTEK_Customer_RFQ.Customer_RFQ_ID = ". $customer_rfq_id;
	
	
	
	$result = mysql_query($query, $linkID) or die("Error while selecting RFQ Enquiries."); 
	return $result;

?>


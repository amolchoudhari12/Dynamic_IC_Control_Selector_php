<?php
	
	ob_start();
	
	include 'SQLs/Select-DB.php';


	// Connect to server and select databse.
	$linkID = mysql_connect($host, $username, $password) or die("Could not connect to host."); 
	mysql_select_db($db_name, $linkID) or die("Could not find database."); 

	
	$id ="";
	if(isset($_GET['cid']))
	    $id= $_GET['cid'];
	
	//Adding Customer in MySQL
	$query = "select OTEK_Customer.CustomerID, CustomerName,ModelName, Quantities, 
				     TotalPrice, GrantTotal,CreatedDate,SequenceDigit, DigitSelectedValue, 
				     SelectedValue, FinalPrice, CustomNote 
			  from $db_name.OTEK_CustomerQuote ,$db_name.OTEK_QuoteDetails,
			  	   $db_name.OTEK_Customer
			  where
			  		$db_name.OTEK_CustomerQuote.CustomerQuoteID =$db_name.OTEK_QuoteDetails.CustomerQuoteID
			  		and
			  		$db_name.OTEK_CustomerQuote.CustomerID =$db_name.OTEK_Customer.CustomerID
			  		and OTEK_CustomerQuote.CustomerQuoteID = $id";
	
	
			  		
	
	$result = mysql_query($query, $linkID) or die("Error while selecting RFQ Enquiries."); 
	
	return $result;
?>


<?php

session_start();
if (!(isset($_SESSION['myusername']) && $_SESSION['mypassword'] != '')) {
header ("Location: login.php");
}


if($_POST['crid'] ==null)
	header ("Location: login.php");
	ob_start();

	include 'SQLs/Select-DB.php';

	// Connect to server and select databse.
	$linkID = mysql_connect($host, $username, $password) or die("Could not connect to host."); 
	 mysql_select_db($db_name, $linkID) or die("Could not find database."); 

	// Define all the valiable
	
	 		
  		$customer_rfq_id = $_POST['crid'];
		include 'Classes/ItemDetails.php';
  		include 'SQLs/Select-Details-For-Pricing.php';
 		$row = mysql_fetch_array($result);
 		$string = $row['RFQDetails'];
 		$xml= simplexml_load_string($string);
 		
 		
 		
	
	
	 $modelDigits = ""; 
	 
	 if(!isset($_POST['numberOfDigitsInCombine']))
	 	$modelDigits = $_POST['numberOfDigits']; 
	 else 
		$modelDigits = $_POST['numberOfDigitsInCombine']; 
	 

		$customerName = $row['CustomerName'];
		$customerEmail = $row['Email'];
		$modelName = $row['ModelName'];
		$quantities = $row['Quantities'];
		$totalPrice = $_POST['txtTotal'];
		$grantTotal = $_POST['txtGrantTotal'];
		$customerID = $row['CustomerID'];
		$operatorInitials = $_SESSION['myusername'];
	
		
		
		$orderDate = date("Y-m-d");
		//Adding Customer in MySQL
		$query = "insert into  $db_name.otek_customerquote 
				(CustomerID, ModelName, Quantities, TotalPrice,
				 GrantTotal,OperatorInitials, QuoteStatus, CreatedDate)
				 values($customerID,'$modelName','$quantities','$totalPrice',
				 '$grantTotal','$operatorInitials',2,'$orderDate')";
		
		print $query;
		$resultID = mysql_query($query, $linkID) or die("Error while inserting customer quote"); 
		$customerQuoteID  = mysql_insert_id();
		
		
  	 	$proccessedDigit = "";	

 		foreach($xml->Entries  as $Entries)
 		{
 			foreach($Entries->OrderEntry  as $OrderEntries)
 			{
 				foreach ($OrderEntries->OrderItem as $OrderItems)
				{
					$customNote = "";
					$customInstruction ="";
					$finalPriceOfItem = "";
					
					$modelDigit = $OrderItems->attributes()->ModelDigit;
					
					if($proccessedDigit != $modelDigit)
					{
						$orderedValue = $OrderItems->attributes()->OrderedValue;					
						$orederedText = $OrderItems->attributes()->Text;
						if(isset($_POST['dgtFinalPrice'.$modelDigit]))
						{					
							$finalPriceOfItem =$_POST['dgtFinalPrice'.$modelDigit];
							
						}
						else
						{
							$finalPriceOfItem =$_POST['dgtFinalPrice'.($modelDigit+1)];
							$modelDigit = $modelDigit ."-". ($modelDigit+1);
							$proccessedDigit = $modelDigit+1;
						}	
						
						$pos = strpos($orederedText, "__");
	
						if($pos > 0)
						{
							$customNote = $orederedText;
								
							if(isset($_POST['dgtCustomInstruction'.$modelDigit]))
								$customInstruction = $_POST['dgtCustomInstruction'.$modelDigit];
						}
						
						$query ="insert into $db_name.otek_quotedetails (CustomerQuoteID, 
						SequenceDigit, 	DigitSelectedValue, SelectedValue, 
						FinalPrice, CustomNote,  CustomNoteInstruction)
						values($customerQuoteID,'$modelDigit','$orderedValue','$orederedText',
						$finalPriceOfItem,'$customNote','$customInstruction')";
							
						$resultID = mysql_query($query, $linkID) or die("Error while inserting customer quote details"); 
						$quoteDetailsID  = mysql_insert_id();
					}	
				}
 			}
		}
		
		
		//Set RFQ status to Closed and quote status to created.
		$query = "update  $db_name.otek_customer_rfq
				  set rfqstatusid = 3 where customer_rfq_id = $customer_rfq_id";
		$resultID = mysql_query($query, $linkID) or die("Error while updating customer rfq status"); 
				
		$query = "update  $db_name.otek_customerquote
				  set quotestatus = 2 where customerquoteid = $customerQuoteID";
		$resultID = mysql_query($query, $linkID) or die("Error while updating customer quote status"); 
		
		
		
		
			
		$email = $customerEmail; 
		print $_POST['txtEmailCC'] ."<br/>";
		$cc1 = "";
		$cc2 ="";
		$cc3="";
		$cc4="";
		$cc5="";
		if(isset($_POST['txtEmailCC']))
		    list($cc1, $cc2, $cc3, $cc4, $cc5) = split(";", $_POST['txtEmailCC']);
		
		    print $cc1. $cc2 ;
  		$MailType = "QuoteSubmitted";
   		$url = "http://172.16.10.210/OTEK100/my-quote.php?cid=".$customerQuoteID;				
    	include "Send-Mail.php";
 
  		
		header ("Location: Quote-Submitted.php");

?>


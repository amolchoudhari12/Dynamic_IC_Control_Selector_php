<?php
	ob_start();

	include 'SQLs/Select-DB.php';

	// Connect to server and select databse.
	$linkID = mysql_connect($host, $username, $password) or die("Could not connect to host."); 
	 mysql_select_db($db_name, $linkID) or die("Could not find database."); 

	// Define all the valiable
	
	$username = $_POST['name']; 
	$email =$_POST['email'];
	$telephone = $_POST['phone']; 
	$fax = 	$_POST['fax'];
	$company = $_POST['company'];
	$address = $_POST['address'];
	$country = $_POST['country'];
	$state = $_POST['state'];
	$city = $_POST['city'];
	$zip = $_POST['zip'];
	
	$modelName =  $_POST['modelName'];
	$requiredQuanitites = $_POST['quantities'];
	
	

	
	//Adding Customer in MySQL
	$query = "insert into $db_name.otek_customer (CustomerName,Email,Telephone,Fax,Company,Address,Country,State,Zip)
								 values('$username','$email', '$telephone', '$fax', '$company', '$address', '$country', '$state','$zip');";
	$resultID = mysql_query($query, $linkID) or die("Error while inserting customer"); 
	$customerID  = mysql_insert_id();
	//Customer Added Complete
	
	$modelDigits = $_POST['numberOfDigits']; 
	
	$xml_output = "<?xml version=\"1.0\"?>\n"; 
	$xml_output .= "<root>\n"; 
	$xml_output .= "<Entries>\n"; 
 	$xml_output .= "\t<OrderEntry>\n"; 
	
 	$count =1;
 	$isQuoteOnHold = false;
 	
	for($x = 0 ; $x < $modelDigits ; $x++)
	{ 
   		$digitName = 'dgt'.$count;  
   		$digitCustomName = 'dgtCustom'.$count;
   		
   		if($_POST[$digitCustomName] == '')
   		{
 	    	$xml_output .= "\t\t<OrderItem ModelDigit=\"$count\"  OrderedValue=\"$_POST[$digitName]\"></OrderItem>\n";
   		}
   		else {
   			
   					$pos = strpos($_POST[$digitCustomName], "__");

					if($pos > 0)
					{
						$customNote = substr($_POST[$digitCustomName],$pos+2);	
						if($customNote == "")
							$isQuoteOnHold = true;					
						$xml_output .= "\t\t<OrderItem ModelDigit=\"$count\"  OrderedValue=\"$_POST[$digitName]\"  Type =\"Custom\" Text=\"$_POST[$digitCustomName]\"></OrderItem>\n";
					}
					else 
					{
   			
   						$xml_output .= "\t\t<OrderItem ModelDigit=\"$count\"  OrderedValue=\"$_POST[$digitName]\"  Type =\"Non-Custom\" Text=\"$_POST[$digitCustomName]\"></OrderItem>\n";
					}
   		} 
    	$count += 1;
	} 
	
	
 	$xml_output .= "\t</OrderEntry>\n"; 
	$xml_output .= "</Entries>"; 
	$xml_output .= "</root>"; 
														
	//Adding OrderDetails in MySQL
	$query = "insert into $db_name.otek_rfqdetails (rfqdetails) values('$xml_output');";
	$resultID = mysql_query($query, $linkID) or die("Error While inserting order details."); 
	$rfqdetailsID  = mysql_insert_id();
	//Order Details Added Complete
	
	
	
	//Adding Customer order
	$orderDate = date("Y-m-d");
	
	if($isQuoteOnHold)
	{
		$query = "insert into $db_name.otek_customer_rfq (CustomerID, RFQDetailsID, ModelName, Quantities,RFQStatusID, OrderedDate) 
										values($customerID,$rfqdetailsID,'$modelName', $requiredQuanitites, 4,'$orderDate');";
	}
	else {
		$query = "insert into $db_name.otek_customer_rfq (CustomerID, RFQDetailsID, ModelName, Quantities,RFQStatusID, OrderedDate) 
										values($customerID,$rfqdetailsID,'$modelName', $requiredQuanitites, 1,'$orderDate');";
		
	}
	
	$resultID = mysql_query($query, $linkID) or die("Error While inserting Customer's order"); 
	$OrderID  = mysql_insert_id();
	
	
	

?>


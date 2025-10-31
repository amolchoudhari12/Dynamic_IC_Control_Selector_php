<?PHP 
session_start();
if (!(isset($_SESSION['myusername']) && $_SESSION['mypassword'] != '')) {
header ("Location: login.php");
}
?>
<html>
<head>
    <title>OTEK Corp Home Page - Digital Panel Meters, Bargraphs, Controllers</title>
    <script src="Scripts/jquery-1.5.1.min.js" type="text/javascript"></script>
    <script src="Scripts/jquery-ui-1.8.13.custom.min.js" type="text/javascript"></script>
    <script src="Scripts/otek-pricing.js" type="text/javascript"></script>
    <script src="Scripts/model-pricing-form.js" type="text/javascript"></script>
    <link href="Styles/ui-darkness/jquery-ui-1.8.13.custom.css" rel="stylesheet" type="text/css" />
    <link href="Styles/CommonStyle.css" rel="stylesheet" type="text/css" />
    <meta name="keywords" content="digital panel meters bargraphs controllers nuclear dpm transmitters receivers" />
    <meta name="description" content="OTEK Corp's home page featuring superior digital panel meters, bargraphs, and controllers" />
    <link href="Styles/CommonStyle.css" rel="stylesheet" type="text/css" />
    
     <style>
       
        .watermarkOn {
        color: #737373;
        font-style: italic;
        }
        
      
   
    </style>
      <script  type="text/javascript">

          
      function validateCC()
      {
          
		      var txtEmailCC =  $("#txtEmailCC").val(); 
		
		      if(txtEmailCC.split(';').length > 5 || txtEmailCC.split(',').length > 1)
			   {
			   ValidationError("Multiple email should be separated by ;. And you can add max 5 email IDs.");
					return false;
			   }
		      
		      var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
		      
		      
		      if( txtEmailCC !='')
		      {
			           if(reg.test(txtEmailCC) == false && !(txtEmailCC.split(';').length >= 2 )   ) {
			        	ValidationError("Please enter valid CC address.");
			   			return false;
			            
			   }
		  
      }

     	

     
    </script>
</head>
<body bgcolor="#000000">
    <div id="dialog-message" title="Confirm">
   
        <div id="warning_message">
        </div>
    </div>
    
    
       
 <div id="validate-message" title="Error">
 <div id="error_message" >
 </div>
</div>


    <form name="formPricing" id="formPricing" method="post" action="Save-Customer-Quote.php" onsubmit="return ValidateQuotation()">
    
     <?php 
     
    			 $type = "";
               	 if(isset($_POST['onhold']))
               	 {
               	 	$type = "onhold";               	
                  
               	 }                  	

     			print "<input type='hidden'  name='crid'  id='crid' value='".$_GET['crid']."'> "; 

     			try {
                                    	$customer_rfq_id = $_GET['crid'];
                                    	
                                    	if($type == "onhold")
                                    	{                                    		
                                    		include 'SQLs/Select-Details-For-Pricing.php?type=onhold'; 
                                    		print "<input type='hidden'  name='type'  id='type' value='onhold'> "; 
                                    	}
                                    	else 
                                    		include 'SQLs/Select-Details-For-Pricing.php';  
                                    	$row = mysql_fetch_array($result);                                  
                                    	
      									include 'Classes\OptionItem.php';	
										$var ="";
										$var= $row['ModelName']; // $_SERVER['QUERY_STRING'];
																				
										include 'Classes\XML_Parser.php';	
									    if(!$isModelExists)
									    	throw new Exception("Model does not exists.");
									    	
									   	
     			}
										catch(Exception $e)
										{
											//$_GET['error'] = "Error hapned";
										 	   //header('Location: Error.php'); 
  												
										}
     ?>
    <div align="center">
        <div id="wrapper">
            <div id="top" align="center">
                <div id="top" align="center">
                    <table border="0" cellspacing="0" cellpadding="0" width="830">
                        <tr>
                            <td>
                                <img src="Images/logo2.png" valign="middle" width="445" height="143" border="0"></a>
                            </td>
                           
                        </tr>
                        <tr>
                            <td colspan="2">
                                <img src="Images/photobar.png" width="830" height="108" border="0">
                            </td>
                             <tr>
                   <td colspan="2" align="right"> <a href='logout.php'>Log out</a>
                   </td>
                   </tr>
                            
                               
                            
                        </tr>
                    </table>
                     <table border="0" cellspacing="0" cellpadding="0" width="830">
                    
                           <td style="background: #505050;" align="center">
                            
                                  
                           <INPUT TYPE="button" style="background-color: #123456"  value="Home"  onClick="parent.location='Enquiries.php'"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                      
								<INPUT TYPE="button" style="background-color: #123456"  value="View Enquiries"  onClick="parent.location='Enquiries.php'"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<INPUT TYPE="button" style="background-color: #123456"  value="View On-Hold Enquiries"  onClick="parent.location='on-Hold-Enquiries.php'">
					
                           
                        
                            </td>
                            </tr>
                          
                           
                    </table>
                </div>
            </div>
            <div id="content" align="center">
                <table border="0" width="830" cellspacing="0" cellpadding="0" bgcolor="383838">
                    <tr>
                        <td align="center" valign="top">
                     
                            <br/>
                              <span style="color:#ffffff;font-size:Larger;font-weight:bold;"> OTEK Model Pricing
                                       </span> 
                            <br /><br />
                        </td>
                    </tr>
                    <tr>
                        <td align="center" >
                            <table border="0" width="750" cellspacing="0" cellpadding="0" bgcolor="383838">
                                <tr>
                                    <td align="left" valign="top">
                                        <span style="color: #ffffff;  font-weight: bold;">Selected Model 
                                        </span>
                                         <?php print "<label id='modelname' value='".$row['ModelName']."'>".$row['ModelName']." </label>";?>
                                       
                                    </td>
                                   
                                
                                   <td align="left" valign="top">
                                        <span style="color: #ffffff;  font-weight: bold;">Customer Name  
                                        
                                        </span>
                                        <?php print "<label id='customername' value='".$row['CustomerName']."'>".$row['CustomerName']." </label>";?>
                                   
                                    </td>
                               
                                    <td align="left" valign="top" >  
                                        <span style="color: #ffffff; font-weight: bold;">Required Quantities  
                                        </span>
                                        <?php print "<label id='quantities' value='".$row['Quantities']."'>".$row['Quantities']." </label>";?>
                                      
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td align="center">
                            <div id="users-contain">
                                <table border="1" id="users-contain" style="border-color: #666464;" class="ui-widget-content">
                                    <thead class="ui-widget-header">
                                        <tr>
                                            <th style='width: 30px; color: ffffff'>
                                                Digit
                                            </th>
                                            <th style='width: 150px; color: ffffff'>
                                                Description
                                            </th>
                                            <th style='width: 30px; color: ffffff'>
                                               Selected option
                                            </th>
                                            <th style='width: 300px; color: ffffff'>
                                                Option value
                                            </th>
                                            <th style='width: 50px; color: ffffff'>
                                                Price
                                            </th>
                                            <th style='width: 30px; color: ffffff'>
                                                Change by %
                                            </th>
                                           
                                            <th style='width: 300px; color: ffffff'>
                                                Manual Price
                                            </th>
                                           
                                            <th style='width: 300px; color: ffffff'>
                                                Final Price
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                              	       <?php                                                                      

                              	      // include 'Classes/ItemDetails.php';
                              	     	include 'Classes/PricingDetails.php';
                              	       	$itemDetailsColl = array();
                              	       	 $j =0;
									    	
									  
                              	     	function GetCostOfSelectedItem($paramName, $key )
                              	     	{
                              	     		
                              	     		
                              	  		
                              	     	}
                              	       
                                        $count = 1;
                                        $initializer = 0;
                                        $isCombineOccured = false;

                                        
                                        
                                        for ($i = $initializer; $i < $parametersCount; $i++) 
                                        {
                                        	$selectedKeyForDigit =  GetSelectedValues($count, 'digit');
                                        	$SelectedTextForDigit = GetSelectedValues($count, 'text');
                                        	$cost = "";

                                        	for ($j = 0; $j < count($itemColl); $j++) {
											   	
                                        	 	if( $itemColl[$j]->parameterName == $parameters[$i] )
                                        	 	{  
											   	  	 if((string)$itemColl[$j]->itemKey == (string)$selectedKeyForDigit)
													 {
													 	$cost =  $itemColl[$j]->price;
													 }
                                        	 	}
                                        	 }
                                        	//$cost = GetCostOfSelectedItem($parameters[$i], $selectedKeyForDigit);
                                        	$disaplyedDigit = "";
                                        
                                        
                                        
                                        	
                                        	if($parameters[$i]== "COMBINE")
                                        	{
                                        		$isCombineOccured = true;
                                        		$disaplyedDigit = $count."-".($count+1);
                                        	    $selected2ndKeyForDigit =  GetSelectedValues(($count+1), 'digit');
                                        		
                                        		print " <tr> <td>".$count."-".($count+1)."</td> <td>";
 	                                        	print $parameters[$i] . "</td>";
 	                                        	print "<td ><label id='lbl".$count."-".($count+1)."' value=''/>".$selectedKeyForDigit." ".$selected2ndKeyForDigit."</td>";
 	                                        	print " <td > <label id='lbl".$parameters[$i]."' value=''/>".$SelectedTextForDigit."</td>";
 	                                        	$count +=1;
										 	}
										 	else 
										 	{
										 		$disaplyedDigit = $count;
																	 		
										 		
										 		print " <tr> <td>".$count."</td> <td>";
												print $parameters[$i] . "</td>";
												print "<td ><label id='lbl".$count."' value=''>".$selectedKeyForDigit."</td>";
												print " <td > <label id='lbl".$parameters[$i]."' name='lbl".$count."' value=''/>".$SelectedTextForDigit."</td>";
											   									         
										 	}
										 	 
										 	print " <td > <label id='lblPrice".$parameters[$i]."' value=''/>".$cost."</td>";
										 	if($cost =="CF" || $cost == "NC" || $cost=="")
											   	print "<td><input type='checkbox' disabled='disabled' id='chkChangeByPercnt".$count."' value='' onClick='CalculateTotal(".'"'.$cost.'"'.",".'"'.$count.'"'.")' /></td>";
											else
											   	print "<td><input type='checkbox' id='chkChangeByPercnt".$count."' value='' onClick='CalculateTotal(".'"'.$cost.'"'.",".'"'.$count.'"'.")'/></td>";
											
 	                                        print " <td > <input type='text' maxlength='7' id='dgtChangePrice".$count."'  name='dgtChangePrice".$count."' class='watermarkOn text ui-widget-content ui-corner-alll' value='' onkeypress='validate(event,".'"'.$cost.'"'.",".'"'.$count.'"'.")'  onchange='CalculateTotal(".'"'.$cost.'"'.",".'"'.$count.'"'.")'/>";

 	                                     
 	                                         
 	                                         
 	                                        if($cost =="CF" || $cost == "NC" || $cost=="")
 	                                        	print " <td > <input type='text' value='' maxlength='7' id='dgtFinalPrice".$count."'  name='dgtFinalPrice".$count."' class='text ui-widget-content ui-corner-all' />";
 	                                       	else 
 	                                       	{
 	                                       		$ContainsOR =  strpos($cost, "/");
 	                                       		if($ContainsOR > 0 )
 	                                       			print " <td > <input type='text' maxlength='7' id='dgtFinalPrice".$count."'  name='dgtFinalPrice".$count."' class='text ui-widget-content ui-corner-all' value='' />";
 	                                       		else
 	                                        		print " <td > <input type='text' maxlength='7' id='dgtFinalPrice".$count."'  name='dgtFinalPrice".$count."' class='text ui-widget-content ui-corner-all' value='$cost' />";
 	                                       	}
										 	$count+=1;
										 	
										 	
										 	
										 	$thisItem = new ItemDetails($count,$disaplyedDigit, $parameters[$i],$selectedKeyForDigit,$SelectedTextForDigit);
										 	array_push($itemDetailsColl,$thisItem); 
                                        }
                                        
                                        if($isCombineOccured)
                                        	print "<input type='hidden'  name='numberOfDigitsInCombine'  id='numberOfDigitsInCombine' value='".($count-2)."'> ";
										print "<input type='hidden'  name='numberOfDigits'  id='numberOfDigits' value='".($count-1)."'> ";
                                        print "</tr>";
                                          
                                      ?>
                                                
                                           <tr>
                                          
                                           <td >
                                           
                                        
                                          
                                           </td>
                                           </tr>                          
                                    </tbody>
                                     
                                </table>
                                
                              
                            </div>
                            <table border="0" width="780">
                                           <tr>
                                          <td align="right" width="70%">
                                           <b>Total:</b>
                                           </td>
                                          
                                           <td align="left">
                                          <input type='text'  maxlength='10' id='txtTotal' name="txtTotal"  class='text ui-widget-content ui-corner-all' />
                                           </td>
                                           </tr>
                                           
                                            <tr>
                                         <td align="right">
                                           <b>Quantities:</b> 
                                           </td>
                                          
                                           <td align="left">
                                           <?php 
                                          print "<input type='text'   maxlength='10' id='txtQuantities'   name='txtQuantities' class='text ui-widget-content ui-corner-all'  value='".$row['Quantities']."'/>";
                                          ?>
                                           </td>
                                           </tr>
                                           
                                            <tr>
                                          <td align="right">
                                          <b>Grand Total:</b> 
                                           </td>
                                          
                                           <td align="left">
                                           <input type='text'  maxlength='10' id='txtGrantTotal'   name ="txtGrantTotal" class='text ui-widget-content ui-corner-all' />
                                           </td>
                                           </tr>
                                           </table>
                                           <div id="users-contain">
                                <table border="1" id="users-contain" style="border-color: #666464;" class="ui-widget-content">
                                 
                                   <tr class="ui-widget-header">
                                   
                                   
                                   
                                   <td colspan="4">
                                   <b>Custom Item's Instruction</b>
                                   
                                   </td>
                                   
                                   </tr>
                                   
                                   <tr class="ui-widget-header">
                                            <th style='width: 30px; color: ffffff'>
                                                Digit
                                            </th>
                                            <th style='width: 200px; color: ffffff'>
                                                Description
                                            </th>
                                            <th style='width: 250px; color: ffffff'>
                                              Customer Entered Text
                                            </th>
                                            <th style='width: 350px; color: ffffff'>
                                               Operator Instructions
                                            </th>
                                   
                                  
                                   </tr>
                                   
                                   <tr>
                                   
                                   <?php 
                                   
                                     	$count = 1;
                                        $initializer = 0;
                                        $isCsutomOccured = false;                                   
                                        
                                        for ($i = $initializer; $i < $parametersCount; $i++) 
                                        {
                                        	$selectedKeyForDigit =  GetSelectedValues($count, 'digit');
                                        	$SelectedTextForDigit = GetSelectedValues($count, 'text');
                                        
                                        	$pos = strpos($SelectedTextForDigit, "__");
                                        	
                                        	if( $pos > 0)
                                        	{
                                        		$isCsutomOccured = true;
	                                        	if($parameters[$i]== "COMBINE")
	                                        	{                                     	
	                                        		print " <tr> <td>".$count."-".($count+1)."</td> <td>";
	 	                                        	print $parameters[$i] . "</td>";
	 	                                       		$count +=1;
	                                        	}
	                                        	else
	                                        	{
	                                        		print " <tr> <td>".$count."</td> <td>";
													print $parameters[$i] . "</td>";
											
	                                        	}
	                                        	
	                                        		print " <td > <label id='lbl".$parameters[$i]."' value=''/>".$SelectedTextForDigit."</td>";
	                                        		print " <td > <input type='text' maxlength='50' id='dgtCustomInstruction".$count."' name='dgtCustomInstruction".$count."'  class='watermarkOn text ui-widget-content ui-corner-alll' value=''  />";
	                                        		
                                        	}
                                        	
                                        	
                                        		
                                        	
                                        	$count +=1;
                                        }
                                        if(!$isCsutomOccured)
                                        print "<tr><td colspan='3'> No Custom records found. </td></tr>";
                                   ?>
                                   
                                   </tr>
                                   </table>        
                                            </div>
                                            
                                            <div id="user-contain">
                                            
                                          <table border="0" id="users-contain" style="border-color: #666464;" class="ui-widget-content">
                                            
                                              <tr class="ui-widget-header">
                                            
                                            
                                            <td>
                                              <table border="0" width="750">
                                              
                                            <tr>
                                              
                                              <td>
                                              
                                               Add CC (by ; as a separator)
                                              </td>
                                              
                                              
                                              </tr>
                                              
                                              
                                              <tr>
                                              
                                              <td>
                                              <input type="text" name="txtEmailCC" id="txtEmailCC" value="" class="text ui-widget-content ui-corner-all" />
                                              </td>
                                              
                                              </tr>
                                              </table>
                                            
                                            </td>
                                            
                                            </tr>
                                            
                                            </table>
                                            
                                            </div>
                             <div aling="center">
                            
                             	<input type="button" id="Preview" name="Preview" value="Preview Quote"  style="background-color: #123456" onclick="preview()">
                             <?php  if(!isset($_GET['type']))
                             print "<input type='submit' id='generate' name='Submit' value='Generate and Send Quote'  style='background-color: #123456'  >";
                             ?>
                				
                				
            				</div>
           					 <br/> <br/>
                        </td>
                    </tr>
                </table>
               
            </div>
            
  				<div id="footer">
                    <center>
                        <font color="#FFFFFF">&copy; 2010 Copyright OTEK Corp | All Rights Reserved</font>
                    </center>
                </div>
    </div> </div>
    
    <div id="dialog-form"  title="OTEK quote preview" >
		<table width="100%" >
		<tr>
		<td>
		<table border="0" width="100%" cellspacing="0" cellpadding="0" bgcolor="000000" style="border-color: #666464;">
		<thead class="ui-widget-header " >
                                <tr >
                                    <td align="left" valign="top">
                                        <span style="color: #ffffff; font-size: Larger; font-weight: bold;">Selected Model  
                                        </span>
                                        <br />
                                    </td>
                                   
                                
                                   <td align="left" valign="top">
                                        <span style="color: #ffffff; font-size: Larger; font-weight: bold;">Customer Name  
                                        	
                                        </span>
                                        <br />
                                    </td>
                               
                                    <td align="left" valign="top" >  
                                        <span style="color: #ffffff; font-size: Larger; font-weight: bold;">Required Quantities 
                                        </span>
                                        <br />
                                    </td>
                                </tr>
                                </thead>
                                <tr>
                                <td align="left">
                                <?php print "<label id='modelname' value='".$row['ModelName']."'>".$row['ModelName']." </label>";?>
                                </td>
                                
                               <td align="left">
                                <?php print "<label id='customername' value='".$row['CustomerName']."'>".$row['CustomerName']." </label>"; ?>
                                </td>
                                
                                <td align="left">
                                <?php print "<label id='quantities' value='".$row['Quantities']."'>".$row['Quantities']." </label>";?>
                                </td>
                                </tr>
                            </table>
		</td>
		</tr>
		<tr>
		<td aling="center">
		<div id="users-contain" aling="center">
		 <table border="0" id="users-contain" style="border-color: #666464;" class="ui-widget-content">
		
                                    <thead class="ui-widget-header">
                                        <tr>
                                            <th style='width: 30px; color: ffffff'>
                                                Digit
                                            </th>
                                            <th style='width: 150px; color: ffffff'>
                                                Description
                                            </th>
                                            <th style='width: 30px; color: ffffff'>
                                               Selected option
                                            </th>
                                            <th style='width: 200px; color: ffffff'>
                                                Option value
                                            </th>
                                            <th style='width: 100px; color: ffffff'>
                                                Price
                                            </th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                    
                                    <?php 
                                  
                                     foreach($itemDetailsColl as $item){
                                     	print "<tr>";
                                     	print "<td>". $item->displayedDigit."</td>";
                                     	print "<td>". $item->itemParameter."</td>";
                                     	print "<td>". $item->itemKey."</td>";
                                     	print "<td>". $item->itemValue."</td>";

                                     	$strLength = strlen ($item->displayedDigit);
                                     	$pos = $pos = strpos($item->displayedDigit, "-");
                                     	if($pos > 0)
                                     		print "<td><label id='lblPreviewPrice". substr($item->displayedDigit,$pos+1, $strLength-1)."' value=''/></td>";
                                     	else
                                     		print "<td><label id='lblPreviewPrice".$item->displayedDigit."' value=''/></td>";
                                     	print "</tr>"; 
                                     }
                                   
                                    ?>
                                    </tbody>
                                    </table>
		</div>
		</td>
		</tr>
		
		
		
		<tr>
		<td>
		<div id="users-containSum">
		 <table border="0" >
                                           <tr>
                                          <td align="right" width="70%">
                                           <b>Total:</b>
                                           </td>
                                          
                                           <td align="left">
                                          <input type='text' size="35" maxlength='10' id='txtTotalPreview' name="txtTotalPreview"  class='text ui-widget-content ui-corner-all' value='' />
                                           </td>
                                           </tr>
                                           
                                            <tr>
                                         <td align="right">
                                           <b>Quantities:</b> 
                                           </td>
                                          
                                           <td align="left">
                                          <input type='text' size="35"  maxlength='10' id='txtQuantitiesPreview'   name="txtQuantitiesPreview" class='text ui-widget-content ui-corner-all'  value=''/>
                                           </td>
                                           </tr>
                                           
                                            <tr>
                                          <td align="right">
                                          <b>Grand Total:</b> 
                                           </td>
                                          
                                           <td align="left">
                                           <input type='text'  size="35" maxlength='10' id='txtGrantTotalPreview'   name ="txtGrantTotalPreview" class='text ui-widget-content ui-corner-all' value=''/>
                                           </td>
                                           </tr>
                                           <tr>
                                           
                                           <td>
                                           
                                           
                                           <br/>
                                           <br/>
                                           </td>
                                           </tr>
                                           </table></div>
		</td>
		</tr>
		</table>
</div>
  </form>
 
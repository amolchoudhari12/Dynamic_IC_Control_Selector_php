<?php 

  	$itemDetailsColl = array();
  		include 'Classes/ItemDetails.php';
  			
  							function GetSelectedValues($no, $retunType){
		
                              	       		$returnValue="";
                              	       		$customer_rfq_id = $_GET['crid'];
                              	       		include 'SQLs/Select-Details-For-Pricing.php';  
                                    		$row = mysql_fetch_array($result);  
                              	       		$string = $row['RFQDetails'];
   											$xml= simplexml_load_string($string);

                              	       		
   								    		foreach($xml->Entries  as $Entries)
											{																						
												foreach($Entries->OrderEntry  as $OrderEntries)
												{
													foreach ($OrderEntries->OrderItem as $OrderItems)
													{
														$modelDigit = $OrderItems->attributes()->ModelDigit;
														if($modelDigit == $no )
														{
																
															switch($retunType)
															{
															
																case "digit":
																		$returnValue = $OrderItems->attributes()->OrderedValue;
																		break;
																case "text":
																		$returnValue = $OrderItems->attributes()->Text;
																		break;
															}
														}
														
															
														
														
													}
												}

											}
											
                              	       	return $returnValue;
                              	       }
                              	       

                              	       
                              	       
  							function GetSelectedDigitDetails($crid)
  							{
  											$customer_rfq_id = $crid;
                              	       		include 'SQLs/Select-Details-For-Pricing.php';  
                                    		$row = mysql_fetch_array($result);  
                              	       		$string = $row['RFQDetails']; 
   											$xml= simplexml_load_string($string);

                              	       		
   								    		foreach($xml->Entries  as $Entries)
											{																						
												foreach($Entries->OrderEntry  as $OrderEntries)
												{
													foreach ($OrderEntries->OrderItem as $OrderItems)
													{
														$modelDigit = $OrderItems->attributes()->ModelDigit;
														
														$item = new ItemDetails($OrderItems->attributes()->ModelDigit, $returnValue = $OrderItems->attributes()->OrderedValue,$returnValue = $OrderItems->attributes()->Text);
														
														print $item->itemKey;
														//array_push($itemDetailsColl,$item);
													}
												}

											}
											
                              	       	//return $itemDetailsColl;
                              	       	return $modelDigit;
                            }

                            
                            
                            function GetSelectedItemValues($no, $retunType){
                            	
                            	
                            		$itemDetailsColl = GetSelectedDigitDetails($_GET['crid']);
                            		
                            	    $returnValue ="";
                            	
                            			foreach($itemDetailsColl as $item)
                            			{

                            				if($item-> $itemDigit == $no)
                            				{
                              	       			$modelDigit = $OrderItems->attributes()->ModelDigit;

                              	       					if($modelDigit == $no )
														{
															switch($retunType)
															{															
																case "digit":
																		$returnValue = $OrderItems->attributes()->OrderedValue;
																		break;
																case "text":
																		$returnValue = $OrderItems->attributes()->Text;
																		break;
															}
														}
                            				}
                            			}			
									 	return $returnValue;   
                              	  			
                              	       
                              	       }
                              	       
                              	 
?>
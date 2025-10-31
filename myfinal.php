<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>
<head>
   
    <script src="Scripts/jquery-1.5.1.min.js" type="text/javascript"></script>
    <script src="Scripts/jquery-ui-1.8.13.custom.min.js" type="text/javascript"></script>
    <script src="Scripts/otek-common.js" type="text/javascript"></script>
    
     <script type="text/javascript">
         $(document).ready(function () {

             for (var i = 0; i < document.forms[0].elements.length; i++) {
                 element = document.forms[0].elements[i];

                 if (element.type == "text") {
                     element.value = '';
                 }

                 if (element.type == "radio") {
                     element.checked = false;
                 }
             }


         });
     </script>
     
     
<style type='text/css'>
body {
	font-family:Arial, Helvetica, sans-serif;
	font-size:12px;
}

.nodeText
{
	white-space:nowrap;
	color:#000000;
	font-size:11px;
}
.nodes {
	width:18px;
	background:url(1.gif) no-repeat;
}

.uShape {
	width:18px;
	background:url(u.gif) no-repeat;
}

.nodes_right {
	width:18px;
	background:url(1_right.gif) no-repeat top right;
}
.box {
	background:url(box.gif) no-repeat top right;
	width:30px;
	height:24px;
}
.box_right {
	background:url(box.gif) no-repeat top left;
	width:30px;
	height:24px;
}
 
.blank_vertical_line {
	width:18px;
	background:url(2.gif) repeat-y;
}
.blank_vertical_line_right {
	background:url(2_right.gif) repeat-y;
}


.box_number {
	text-align:right;
	padding-right:10px;
}

.box_number_right {
	padding-left:10px;
}
.nodeTitle_left {
	font-weight:bold;
	vertical-align:bottom
}

.u_left {
	background:url(u-l.gif) no-repeat top right;
	width:30px;
	height:24px;
}
.u_right {
	background:url(u-r.gif) no-repeat top left;
	width:30px;
	height:24px;
}
</style>
    <link href="Styles/CommonStyle.css" rel="stylesheet" type="text/css" />
    <link href="Styles/ui-darkness/jquery-ui-1.8.13.custom.css" rel="stylesheet" type="text/css" />
    <title>OTEK Corp Home Page - Digital Panel Meters, Bargraphs, Controllers</title>
    <meta name="keywords" content="digital panel meters bargraphs controllers nuclear dpm transmitters receivers" />
    <meta name="description" content="OTEK Corp's home page featuring superior digital panel meters, bargraphs, and controllers" />
</head>
<body bgcolor="#000000">
    <form name="form1" method="post" action="User-Details.php"  onsubmit="return IsConfigDone()">
    
 <div id="dialog-message" title="Error">
 <div id="error_message">
 </div>
</div>
         					
      					
      									<?php 
 										print "<input type='hidden'  name='error'  id='error' value=''/> ";
      									try {
      											include 'Classes\SelectControl.php';
												include 'Classes\OptionItem.php';	
												$var ="";
												$var= $_GET['model']; // $_SERVER['QUERY_STRING'];
																								
												include 'Classes\XML_Parser.php';	
									    		if(!$isModelExists)
									    			throw new Exception("Model does not exists.");
									    			
      									} 
      									
      									
										
										catch(Exception $e)
										{
											$_GET['error'] = "Error hapned";
										 	   header('Location: Error.php'); 
  												
										}
										      									
		      									
							    		?>
								
    <div align="center">
        <div id="wrapper">
            <div id="top" align="center">
                <div id="top" align="center">
                           
                    <table border="0" cellspacing="0" cellpadding="0" width="839">
                        <tr>
                            <td>
                                <img src="Images/logo2.png" valign="middle" width="200" height="50" border="0"></a>
                            </td>
                           
                        </tr>
                     
               
                    </table>
                </div>
            </div>
            <div id="content" align="center">

                        <table border="0" width="835" cellspacing="0" cellpadding="0" bgcolor="383838"  style="border-color:#666464">
                        
                              <tr>
				<td align="center">
				<div id="users-contain" class="ui-widget" style="Display:none">
                                                <table border="1" id="users-contain"  style="border-color: #666464; bgcolor:#999999" class="ui-widget-content">
												
									                               <span id="MainContent_Label1" style="color:#ffffff;font-size:Larger;font-weight:bold;">Ordering Info
                                      of : <?php print $model->attributes()->name;
                                       	print "<input type='hidden'  name='modelName'  id='modelName' value='".$model->attributes()->name."'> "?></span>
                                                    <thead align='center'>
                                                        <tr  >
                                                        <td>
                                                        
                                                        <table>
                                                          <?php 
															   $count = 1;
															   $initializer = 0;
															  
															
															  for ($i = $initializer; $i < $parametersCount; $i++) 
															 {
															 	if($parameters[$i]== "COMBINE")
								 								{
								 									print "<td align='center'>". $count."</td>";
								 									print "<td align='center'>".($count +1)."</td>";
								 									$count +=2;
								 								}
								 								else {
															  
								 									print "<div aling'center'><td align='center'>".$count."</td></div>";
																	$count +=1;
								 								}
															 }
																
																print "<input type='hidden'  name='numberOfDigits'  id='numberOfDigits' value='".($count-1)."'> "
															  
															  ?>
                                                        </table>
                                                        </td>
                                                        
                                                        </tr>
                                                        
                                                        <tr>
                                                        
                                                        <td>
                                                        
                                                        <table>
                                                         <?php 
															   $count = 1;
															   $initializer = 0;
															  
																
																  for ($i = $initializer; $i < $parametersCount; $i++) 
																 {
																 	if($parameters[$i]== "COMBINE")
									 								{
									 									print "<td aling='center'> <input type='text'   value='' maxlength='4' id='dgt".$count."'  name='dgt".$count."' class='text ui-widget-content ui-corner-all'> 
									 											</td>";
									 									print "<td aling='center'> <input type='text'  value='' maxlength='4' id='dgt".($count+1)."'  name='dgt".($count+1)."' class='text ui-widget-content ui-corner-all'></td>";
									 									print "<input type='hidden'  name='dgtCustom".$count."'   id='dgtCustom".$count."'  value='".($count)."'>";
									 									print "<input type='hidden'  name='dgtCustom".($count+1)."'   id='dgtCustom".($count+1)."'  value='".($count+1)."'>";
									 									$count +=2;
									 								}
									 								else {
																	print " <td > <input type='text' value='' maxlength='4' id='dgt".$count."'  name='dgt".$count."' class='text ui-widget-content ui-corner-all'/>
																		<input type='hidden'  name='dgtCustom".$count."'   id='dgtCustom".$count."'  value='".($count)."'></td>";
																  		$count +=1;
									 								}
																 }
															
															
															  ?>
                                                        
                                                        </table>
                                                        
                                                        </td>
                                                        </tr>
														
														 
                                                    </thead>
                                                   
                                                </table>
			  
                                            </div>
				</td>
				</tr>                   
                       
                  
                     
                   
                    
				
					</table>				
                    				
              
                    			<table width="900px" border="1" bgcolor="ffffff">
                    			<tr>
                    			
                    			<td  >
                    			
                    

				<?php 
				
				$LeftSideOptionValueTemplate = 
			 		  "<div style='position:absolute; margin-left: [#MARIGN_LEFT#]px'>
			          <!-- padding between 1st and 2nd nodes starts here -->
			          <div style='float:left; width:20px;'>&nbsp;</div>
			          <!-- padding between 1st and 2nd nodes ends here -->
			          <div style='float:right;'>
			            <table cellpadding='0' cellspacing='0' border='0'>
			              <tr>
			                <td class='box_number nodeText' align='right'  >[#DIGIT_NO#]</td>
			              </tr>
			              <tr>
			                <td align='right'>[#DIGIT_BOX#]</td>
			              </tr>
			              <tr>
			                <td><table cellpadding='0' cellspacing='0' border='0'>
			                	 [#ROW_OPTION_HEADER#]                  
			                     [#ROW_OPTION_VALUES#]
			                  </table>
			               </td>
			              </tr>
			            </table>
			          </div>
			          </div>";
				
				$LeftSideOptionHeader = "<tr>				 		
                      <td class='nodeTitle_left nodeText' style='width:[#TD_WIDTH#]px'>[#TD_PARAM_NAME#]</td>
                      <td class='blank_vertical_line' style='height:[#TD_HEIGHT#]px'>&nbsp;</td>
                     </tr>";
				
				
				$RightSideOptionValueTemplate = " <div style='position:absolute; margin-left:[#MARIGN_LEFT#]px'>
          <!-- padding between 2nd and 3rd nodes starts here -->
          <div style='float:left; width:20px;'>&nbsp;</div>
          <!-- padding between 2nd and 3rd nodes ends here -->
          <div style='float:right'>
            <table cellpadding='0' cellspacing='0' border='0'>
              <tr>
                <td class='box_number_right nodeText' align='left' >[#DIGIT_NO#]</td>
              </tr>
              <tr>
                <td align='left'>[#DIGIT_BOX#]</td>
              </tr>
              <tr>
                <td><table cellpadding='0' cellspacing='0' border='0'>                    
                    [#ROW_OPTION_HEADER#]  
                    [#ROW_OPTION_VALUES#]
                  </table></td>
              </tr>
            </table>
          </div>
        </div> ";
				
				$RightSideOptionHeader =  "<tr>  
						[#COMBINE#]                    
                      <td class='blank_vertical_line_right' style='height:[#TD_HEIGHT#]px' align='left'>&nbsp;</td>
                      <td class='nodeTitle_left nodeText' align='left'>[#TD_PARAM_NAME#]</td>
                    </tr>";
				
				
				?>	
						<?php 
						
						 
						
						
								$count = 1;
								$initializer = 0;
								  
								$result =  $parametersCount/2;
								$pos = strpos($result, ".");
									if($pos > 0)
										$result -= 0.5;

								
								$leftOptionsCount = $result;
								$rightOptionsCount = $parametersCount-$result;
								
								print $leftOptionsCount;
								
								$leftControlsArray = array();
								$rightControlsArray = array();

								$widthTD = 100;
								$heightTD = 0;
								$lastTDHeight = 0;
								$widthFactor = 30;
								  $isRightRenderingStarted = false; 
								    $isLeftRenderingStarted = false; 
								    $isCombineOccured = false;
								for ($i = $initializer; $i < $parametersCount; $i++) 
								{
									$bodyOfItem = "";									 	
								    $tempArray = array();
								
								   
								     
								    //Item Collection Iteration
								  			$controlsForParameters = array();
								  	
								  			foreach($itemColl as $item1)
											{		 	
												 if($item1 ->parameterName== $parameters[$i])
												 {	
												 	
												 	$controlString = "";
												 	
												 	$control = new SelectControl($item1 ->itemKey ,$item1 ->itemValue, $item1 ->parameterName,$count );
		     											
													if($item1->itemValue !="Custom")
														$controlString =  $control->GetSelectControl($widthFactor);	
													
		     										if($item1 ->itemValue == "Custom")
		     										{  
		     												if($item1 ->parameterName =="COMBINE" && $item1 ->optionName!= "")
		     												{
		     														$isCombineOccured =true;
		     														$control->SelectControlOption($item1 ->itemKey ,$item1 ->itemValue, $item1 ->parameterName, $item1 ->optionName , $count );
		
		     														$controlString = $control->GetSelectControlForCombineCustom($widthFactor);
		     													    $controlString .="<div id='".$item1 ->optionName."'  name='Custom__".$item1 ->parameterName."'  width='100%'></div>";
		     													  													
		     												}
		     												else
		     												{
		     													$controlString = $control->GetSelectControlForCustom($widthFactor);
		     										    		$controlString .= "<div id='".$item1 ->parameterName."' width='100%'></div>";
		     												}    											
		     										}
		     										
		     										array_push($controlsForParameters,$controlString);
		     										
		     										
												 }
										
												 		
											 }
											 
											 // End of Item Collection Iteration
											 
									$digitBox = "<input type='text' value='' style='color:#000000;width:20px' maxlength='4'  style='width:20px; padding: 2px' id='dgtBox.$count.'  name='dgtBox.$count.' />";	 
											 
								
									$rowsForParameter = "";
									
									
									if($count <= $leftOptionsCount)
									{
											if(!$isLeftRenderingStarted)
											{
												$widthTD =100;
												$isLeftRenderingStarted =true;
												$bodyOfItemTR = str_replace("[#TD_HEIGHT#]", "0", $LeftSideOptionHeader);
											}
											else 
											{
												$bodyOfItemTR = str_replace("[#TD_HEIGHT#]", $heightTD, $LeftSideOptionHeader);
												$widthTD +=40;
											}
										$bodyOfItem = str_replace("[#DIGIT_NO#]", $count, $LeftSideOptionValueTemplate);
										$bodyOfItem = str_replace("[#DIGIT_BOX#]", $digitBox, $bodyOfItem);
								
										$bodyOfItemTR = str_replace("[#TD_PARAM_NAME#]", $parameters[$i], $bodyOfItemTR);
										$bodyOfItemTR = str_replace("[#TD_WIDTH#]", $widthTD, $bodyOfItemTR);

										
										
										$rowCount = 0;
                  				  		foreach($controlsForParameters as $tmpControl)
										{	
											
											$tempRow ="<tr> <td align='left' class='nodeText' style='width:".$widthTD."px'>".$tmpControl." </td>
                      								<td class='nodes' valign='top'>&nbsp;</td></tr>";
											$rowsForParameter .= $tempRow; 
											$rowCount ++;
										  
										}  
										
											$heightTD += (20*$rowCount) +40;
											$bodyOfItemTR = str_replace("[#TD_HEIGHT#]", $heightTD, $bodyOfItemTR);
										
										 	
										$lastTDHeight += (15*$rowCount) +30;	 
									  	
									 	
									  	$bodyOfItem = str_replace("[#MARIGN_LEFT#]", "0", $bodyOfItem);
									  	$bodyOfItem = str_replace("[#ROW_OPTION_HEADER#]",$bodyOfItemTR, $bodyOfItem);
									  	$bodyOfItem = str_replace("[#ROW_OPTION_VALUES#]",$rowsForParameter, $bodyOfItem);
									  	
										array_push($leftControlsArray,$bodyOfItem);
									}
									else 
									{
										
										
										$rowCount = 0;
                  				  		foreach($controlsForParameters as $tmpControl)
										{	
											
											$tempRow =" <tr>                      
                      										<td class='nodes_right'>&nbsp;</td>
                      										<td class='nodeText'>$tmpControl</td>
                    									</tr>";
											
											$rowsForParameter .= $tempRow; 
											$rowCount ++;
										  
										}  
										
										
										if(!$isRightRenderingStarted)
										{
											$heightTD = $lastTDHeight - 50;
										 	$widthTD += 130;
										 	
										 	$RightTotalHeight =($heightTD) + (20*$rowCount);
										 	if($RightTotalHeight > $lastTDHeight)
												$lastTDHeight = $RightTotalHeight;
										 	$isRightRenderingStarted = true;
										 
										}
										else 
										{
											$heightTD -= (20*$rowCount) +50;
											$widthTD +=40;
										}
										
										
										if($isCombineOccured)
										{
											$bodyOfItemTR = str_replace("[#COMBINE#]", "<div class='u_left'>4365</div>", $bodyOfItemTR);
									  		$isCombineOccured = false;
										}
									  	else 
									  		$bodyOfItemTR = str_replace("[#COMBINE#]", "", $bodyOfItemTR);
									 
										
										$bodyOfItem = str_replace("[#DIGIT_NO#]", $count, $RightSideOptionValueTemplate);
										$bodyOfItem = str_replace("[#DIGIT_BOX#]", $digitBox, $bodyOfItem);
								
										$bodyOfItemTR = str_replace("[#TD_PARAM_NAME#]", $parameters[$i], $RightSideOptionHeader);
										$bodyOfItemTR = str_replace("[#TD_HEIGHT#]", $heightTD, $bodyOfItemTR);

									
										
										
											
										
									  	$bodyOfItem = str_replace("[#MARIGN_LEFT#]", $widthTD, $bodyOfItem);
									  	$bodyOfItem = str_replace("[#ROW_OPTION_HEADER#]",$bodyOfItemTR, $bodyOfItem);
									  	$bodyOfItem = str_replace("[#ROW_OPTION_VALUES#]",$rowsForParameter, $bodyOfItem);
									  	
										array_push($rightControlsArray,$bodyOfItem);
										
									} 
									 
																		 
									$count +=1;
									if($count <=$leftOptionsCount)
										$widthFactor +=6;
									else 
										$widthFactor -=6;
								 }
								
								 
						 
								 
								 
								 
								 
								 
								 
								 
								 
								 
								 
								 
						$margin = (900 - ($widthTD-20))/2;
						$margin = $margin/2;
						$lastTDHeight += 250;
						$margin = intval($margin);
					print	"<div style='height:".$lastTDHeight."px; width:900px; margin-left:".$margin."px; margin-right:auto;' >
						  <table cellpadding='0' cellspacing='0' border='0'>
						    <tr>
						      <td><!-- first node starts here -->";

					
					
					for ($j = 0; $j < count($leftControlsArray); $j++) {
						
						echo $leftControlsArray[$j];
					}
					
					for ($j = 0; $j < count($rightControlsArray); $j++) {
						
						echo $rightControlsArray[$j];
					}
							 
								
												
						?>
						                    		
						       
						        
						        
						        </td><!-- Last node ends here -->
						    </tr>
						  </table>
						</div>
						                    			
                    			</td>
                    			</tr>
                    			
                    			</table>		
                                     
                                            
                                                                         
             
                
               
                            <table border="0" width="835" cellspacing="0" cellpadding="0" bgcolor="383838"                
                                style="border-color: #666464">
                               
                                <tr>
                                    <td align="center" valign="top" >
									
                                        <div >
                                            <div id="users-contain" class="ui-widget">
                                                <table border="1"  id="users-contain"  style="border-color: #666464;" class="ui-widget-content">
												
									                                    <span id="MainContent_Label1" style="color:#ffffff;font-size:Larger;font-weight:bold;">Summary Ordering Info
                                      : <?php print $model->attributes()->name;
                                       	print "<input type='hidden'  name='modelName'  id='modelName' value='".$model->attributes()->name."'> "?></span>
                                                    <thead  class="ui-widget-header" >
                                                        <tr >
                                                            <th style='width: 50px;color:f58400'>
                                                                Digit #
                                                            </th>
                                                            <th style='width: 300px ;color:f58400'>
                                                                Digit Description
                                                            </th>
                                                            <th style='width: 500px; color:f58400'>
                                                                Selected option
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
													                    <?php                                                                      
                                                                       
                                                                       $count = 1;
                                                                        $initializer = 0;						  
														   
														  for ($i = $initializer; $i < $parametersCount; $i++) 
														 {
														 	
														 	if($parameters[$i]== "COMBINE")
													 	{
													 		  print " <tr> <td>".$count."-".($count+1)."</td> <td>";
															  print $parameters[$i] . "</td>";
															  print " <td > <label id='lbl".$parameters[$i]."'/></td>";
								 							  $count +=1;
													 	}
													 	else {
								 		 				  print " <tr> <td>".$count."</td> <td>";
														  print $parameters[$i] . "</td>";
														  print " <td > <label id='lbl".$parameters[$i]."' name='lbl".$count."' value=''/></td>";
														 
								 	
								 							}
														
														  $count+=1;
														  
														 }
                                                                       
                                                      print "</tr>";  ?>
                                                                     
                                                                
                                                                   
                                                                       
                                                    </tbody>
                                                </table>
												<input type="submit" name="Submit" value="Continue"  style="background-color: #123456">
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        
        </div>
       
    </div>
    
<table bgcolor="black" width="100%">
<tr >

<td>
  <div id="col2">  
          <center>  
            <font color="#FFFFFF">&copy; 2010 Copyright OTEK Corp | All Rights Reserved</font>  
		  </center> 
		  </div>
</td>
</tr>
</table>
    </form>
  </body>
        
  

</html>

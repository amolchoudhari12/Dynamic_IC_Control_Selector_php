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
                                <img src="Images/logo2.png" valign="middle" width="445" height="143" border="0"></a>
                            </td>
                            <td height="146" width="394"> 
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" height="95">
                                <img src="Images/photobar.png" width="839" height="108" border="0">
                            </td>
                        </tr>
               
                    </table>
                </div>
            </div>
            <div id="content" align="center">

                        <table border="0" width="835" cellspacing="0" cellpadding="0" bgcolor="383838"  style="border-color:#666464">
                <tr>                          
                <td>
                  
                  <table border="0" width="835" cellspacing="0" cellpadding="0"  bgcolor="ffffff"    style="border-color: #666464">  
                                <tr>
                                    <td >
									<div >
										<div >
                                         <table border="1"  width="835"   style="border-color: #666464;" >
										             <thead >
                                                        <tr >
                                                            <th >
                                                                Model Ordering Info
                                                            </th>
                                                            
                                                        </tr>
                                                    </thead>   
                                                    <tbody>
                                                    
                                                    <tr>
                                                    <td>
                                                    
                                                    	<div >
                      <table border="0" style="border-color: #666464; ">
												
									                               <span id="MainContent_Label1" style="color:#000000;font-size:Larger;font-weight:bold;">Ordering Info
                                      of : <?php print $model->attributes()->name;
                                       	print "<input type='hidden'  name='modelName'  id='modelName' value='".$model->attributes()->name."'> "?></span>
                                                    <thead >
                                                        <tr   >
                                                        <font color="black">
                                                          <?php 
															   $count = 1;
															   $initializer = 0;
															  
															
															  for ($i = $initializer; $i < $parametersCount; $i++) 
															 {
															 	if($parameters[$i]== "COMBINE")
								 								{
								 									print "<th align='center'><font color='ffffff'>".$count."</font></th>";
								 									print "<th align='center'><font color='ffffff'>".($count +1)."</font></th>";
								 									$count +=2;
								 								}
								 								else {
															  
								 									print "<th align='center'><font color='ffffff'>".$count."</font></th>";
																	$count +=1;
								 								}
															 }
																
																print "<input type='hidden'  name='numberOfDigits'  id='numberOfDigits' value='".($count-1)."'> "
															  
															  ?>
															  </font>
                                                        </tr>
														
														 
                                                    </thead>
                                                    <tbody>                                                                
                                                                   
                                                          <tr >
                                                          <?php 
															   $count = 1;
															   $initializer = 0;
															  
																
																  for ($i = $initializer; $i < $parametersCount; $i++) 
																 {
																 	if($parameters[$i]== "COMBINE")
									 								{
									 									print "<td aling='center'> <input type='text'   value='' maxlength='4' id='dgt".$count."'  name='dgt".$count."' > 
									 											</td>";
									 									print "<td aling='center'> <input type='text'  value='' maxlength='4' id='dgt".($count+1)."'  name='dgt".($count+1)."' ></td>";
									 									print "<input type='hidden'  name='dgtCustom".$count."'   id='dgtCustom".$count."'  value='".($count)."'>";
									 									print "<input type='hidden'  name='dgtCustom".($count+1)."'   id='dgtCustom".($count+1)."'  value='".($count+1)."'>";
									 									$count +=2;
									 								}
									 								else {
																	print " <td > <input type='text' value='' maxlength='4' id='dgt".$count."'  name='dgt".$count."' />
																		<input type='hidden'  name='dgtCustom".$count."'   id='dgtCustom".$count."'  value='".($count)."'></td>";
																  		$count +=1;
									 								}
																 }
															
															
															  ?>
															  
                                                        </tr>             
                                                    </tbody>
                                                </table>
                                               


		<?php 

			$ModelImageName = "ProductImages/" ;
			$ModelImageName .= $_GET['model'].".jpg" ;
			print "<img src='".$ModelImageName ."' valign='middle' width='750' border='0'>";

		?>
 	
</td>
</tr>
                                                    
                                                    
                                                    <tr>
                                                    
                                                    <td>
                                                    
                                                    
                                                    
                                                    </td>
                                                    
                                                    </tr>
                                                    </tbody>     
                                                    </table>        
                                                    </div>
                                                    </div>                    
                                       </td>
                                </tr>
                </td>
                </tr>
                
                </table>
              
                <tr>
                
                <td>
                
                <table width="750">
						<tr  >
					<td align="left">
                                   <span style="color:#000000;font-size:12px;">

                                        Configure the below Model by selecting each digit tab.: <?php print $model->attributes()->name;?></span> 
                        <?php 
								  
								  $count = 1;
								  $initializer = 0;
								  
								    print "<div class='demo' bgcolor='white'> <div id='tabs'><ul> ";
								  for ($i = $initializer; $i < $parametersCount; $i++) 
								 {
								 
								 	if($parameters[$i]== "COMBINE")
								 	{
								 		
								 		print "<li><a href='#tabs-".$count."'>".$count."-".($count+1)." </a></li>";
								 		$count +=1;
								 	}
								 	else 
								 	{
								  		print "<li><a href='#tabs-".$count."'>".$count." </a></li>";
								 	}
								  	$count +=1;
								 }
								 print "</ul>";
								  $count = 1;
								 
								
								
								 for ($i = $initializer; $i < $parametersCount; $i++) 
								 {    

								 	
								   $optionDisplayed = array();
								   
								 	if($parameters[$i]== "COMBINE")
								 	{								 		
								 		print "<div id='tabs-".$count."' aling='left'>";
								 		$count +=1;
								 	}
								 	else {
								 		print "<div id='tabs-".$count."' aling='left'>";
								 	}     	
								 	
								 	print  $parameters[$i] ."<br/><br/>";
								 	
									foreach($itemColl as $item1)
									{		 	
										 if($item1 ->parameterName== $parameters[$i])
										 {	
										 	if($item1->optionName!= null && !in_array($item1->optionName, $optionDisplayed)){
										 			print "<br/>";
									 	 			print $item1->optionName ;
									 	 			print "<br/>";
									 				array_push($optionDisplayed,$item1->optionName);
									 	}
										    $control = new SelectControl($item1 ->itemKey ,$item1 ->itemValue, $item1 ->parameterName,$count );
     											
											if($item1->itemValue !="Custom")
												print $control->GetSelectControl();	
											
     										if($item1 ->itemValue == "Custom")
     										{  
     												if($item1 ->parameterName =="COMBINE" && $item1 ->optionName!= "")
     												{
     														$control->SelectControlOption($item1 ->itemKey ,$item1 ->itemValue, $item1 ->parameterName, $item1 ->optionName , $count );
     													     print  $control->GetSelectControlForCombineCustom();
     													     print "<div id='".$item1 ->optionName."'  name='Custom__".$item1 ->parameterName."'  width='100%'></div>";
     													  													
     												}
     												else
     												{
     													print  $control->GetSelectControlForCustom();
     										    		print "<div id='".$item1 ->parameterName."' width='100%'></div>";
     												}
     											
     										}
     										print "<br/>";
     										
										 }
								
										 		
									 }$count += 1;
									
									 	print "</div>";
									
									
								 }
								 
									print " </div>	";
								
								
								
								
								?>               
                             
              
                    				
                                    </td>

</tr>
</table>			
                
                </td>
                </tr>
                
               
            </table>
        </div>
       
    </div>
    
     <div>
                            <table border="0" width="835" cellspacing="0" cellpadding="0" bgcolor="383838"                
                                style="border-color: #666464">
                               
                                <tr>
                                    <td align="center" valign="top" >
									
                                        <div >
                                            <div id="users-contain" class="ui-widget">
                                                <table border="1" id="users-contain"  style="border-color: #666464;" class="ui-widget-content">
												

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
														 	else 
														 	{													 		
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

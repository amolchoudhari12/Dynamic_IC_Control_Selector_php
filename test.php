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
     <style >
    .leftedge {
    width: 50px;
  	height: 20px;
	border-color: black black black #000000;
	border-style: solid;
	border-top-width: 0px;
	border-right-width: 0px;
	border-bottom-width: 1px;
	border-left-width: 1px;
	margin-left: 5px;
}

.rightedge {
    width: 50px;
  	height: 20px;
  	margin-top: 0px;
	border-color: black black black #000000;
	border-style: solid;
	border-top-width: 0px;
	border-right-width: 1px;
	border-bottom-width: 1px;
	border-left-width: 0px;
	margin-left: 5px;
}

 .VericleEdge {
    width: auto;
  	height: 40px;
	border-color: black black black #000000;
	border-style: solid;
	border-top-width: 0px;
	border-right-width: 1px;
	border-bottom-width: 0px;
	border-left-width: 0px;
	margin-left: 0px;
}

	.topedge {  
	border-color: #FF0000 black black; 
	border-style: solid; 
	border-top-width: 1px; 
	border-right-width: 0px; 
	border-bottom-width: 0px; 
	border-left-width: 0px
	}

	.topleftedge {
	border-color: #FF0000 black black #000000;
	border-style: solid;
	border-top-width: 1px;
	border-right-width: 0px;
	border-bottom-width: 0px;
	border-left-width: 1px
	}
	
	
	.MyNode1
{
  width: 50px;
  height: 20px;
	
  border-color: red;
  border-top-style:none;
  border-right-style:solid;
  border-bottom-style:dotted;
  border-left-style:none;
  
  border-top-width:thin;
  border-right-width:thin;
  border-bottom-width:thin;
  border-left-width:thin;
  
  background: transparent;
  
  margin-top: 0px;
  /*margin-right: 0px;*/
  /*margin-bottom: 100px;*/
  margin-left: 060px; 	
}

.MyBlock1
{
  width: 20px;
  height: 20px;
  
  border-color: black;
  border-top-style:solid;
  border-right-style:solid;
  border-bottom-style:solid;
  border-left-style:solid;
  
  border-top-width:thin;
  border-right-width:thin;
  border-bottom-width:thin;
  border-left-width:thin;
  
   margin-top: 100px;
  /*margin-right: 0px;*/
  /*margin-bottom: 100px;*/
  margin-left: 100px;  
}
	
  </style>
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
        <div id="wrapper" bgcolor="ffffff">
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
            
           
                              <table border="0"  width="835"  bgcolor="ffffff"  style="border-color: #666464;" >
										             <thead >
                                                        <tr >
                                                            <th style="color: #000000">
                                                                Model Ordering Info
                                                                <div class="VericleEdge" style="color: #000000">
                                                      Amol ----
                                                        </div>    
                                                       
                                                            </th>
                                                            
                                                        </tr>
                                                        
                                                        <tr>
                                                        <td align="center">
                                                        
                                                            <table border="0"  bgcolor="ffffff"  style="border-color: #666464; ">
                      			   <span id="MainContent_Label1" style="color:#ffffff;font-size:Larger;font-weight:bold;">Ordering Info
                                      of : <?php print $model->attributes()->name;
                                       	print "<input type='hidden'  name='modelName'  id='modelName' value='".$model->attributes()->name."'> "?></span>
                                                    <thead align="center">
                                                        <tr   >
                                                       
                                                        <font color="black">
                                                          <?php 
															   $count = 1;
															   $initializer = 0;
															  
															
															  for ($i = $initializer; $i < $parametersCount; $i++) 
															 {
															 	if($parameters[$i]== "COMBINE")
								 								{
								 									print "<td align='center' style='color: #000000'>".$count."</td>";
								 									print "<td align='center' style='color: #000000'>".($count +1)."</td>";
								 									$count +=2;
								 								}
								 								else {
															  
								 									print "<td align='center'  style='color: #000000'>".$count."</td>";
																	$count +=1;
								 								}
															 }
																
																print "<input type='hidden'  name='numberOfDigits'  id='numberOfDigits' value='".($count-1)."'> "
															  
															  ?>
															  </font>
															 
														
														 
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
									 									print "<td aling='center'> <input type='text' style='width: 20px; padding: 2px'  value='' maxlength='4' id='dgt".$count."'  name='dgt".$count."' > 
									 											</td>";
									 									print "<td aling='center'> <input type='text'  value=''  style='width: 20px; padding: 2px' maxlength='4' id='dgt".($count+1)."'  name='dgt".($count+1)."' ></td>";
									 									print "<input type='hidden'  name='dgtCustom".$count."'   id='dgtCustom".$count."'  value='".($count)."'>";
									 									print "<input type='hidden'  name='dgtCustom".($count+1)."'   id='dgtCustom".($count+1)."'  value='".($count+1)."'>";
									 									$count +=2;
									 								}
									 								else {
																	print " <td > <input type='text' value='' maxlength='4'  style='width: 20px; padding: 2px' id='dgt".$count."'  name='dgt".$count."' />
																		<input type='hidden'  name='dgtCustom".$count."'   id='dgtCustom".$count."'  value='".($count)."'></td>";
																  		$count +=1;
									 								}
																 }
															
															
															  ?>
													
                                                        </tr> 
                                                    
                                                        </tr>    
                                                    </tbody>
                                                </table>
                                                    
                                                     <?php 
                                                     
                                                 

                                                  

                                                    	 $controlList = array();
                                                    	 $controlList2 = array();
                                                    	 $controlList3 = array();
																
														 	foreach($itemColl as $item1)
																 {
																	 if($item1 ->parameterName== "INPUT SIGNAL (1)")
																	 {
																		$control = new SelectControl($item1 ->itemKey ,$item1 ->itemValue, $item1 ->parameterName,$count );
							     										array_push($controlList,$control);						     									
							     										
																	 }
																	 
																  if($item1 ->parameterName== "POWER INPUT (2)")
																	 {
																		$control1 = new SelectControl($item1 ->itemKey ,$item1 ->itemValue, $item1 ->parameterName,$count );
							     										array_push($controlList2,$control1);						     									
							     										
																	 }
																	 
																  if($item1 ->parameterName== "CONNECTING PINS (2)")
																	 {
																		$control2 = new SelectControl($item1 ->itemKey ,$item1 ->itemValue, $item1 ->parameterName,$count );
							     										array_push($controlList3,$control2);						     									
							     										
																	 }
																		 
																 }
																
															
															
												
                                                    
                                                     
                                                     
                                                     
                                                     
                                                     
                                                     
                                                     $result =  $parametersCount/2;
                                                     $pos = strpos($result, ".");
                                     				 if($pos > 0)
                                     				  $result -= 0.5;
                                     				  
                                     				  print $result;
                                     				  
                                     				  $leftColumnCount = $result+1;
                                     				  $rightColumnCount = ($parametersCount-$result) +1;
                                     				  
                                     			
                                     				  
                                     				 
                                     				  
                                     				 // $paramControlList = GetControlList("INPUT SIGNAL (1)");
                                     				  
                                     				  print count($controlList);
                                     				  
                                     				     function GetValue()
                                                     {
                                                     	return 1;
                                                     }
                                                     
                                                     
                                               
                                     				  
                                     				  $leftColumnItemsCount = 10;
                                     				  $rigthColumnItemsCount = 9;
                                     				  $rowCount = $leftColumnItemsCount;
                                     				  
                                     				  if($rigthColumnItemsCount > $leftColumnItemsCount)
                                     				  	$rowCount = $rigthColumnItemsCount;
                                     				 // $rowCount =1;
                                     				  print "<table border='1' width='100%'>
                                     				  		<tr>
                                     				  			<td colspan='2'>
                                     				  			asfdasdf
                                     				  			</td>
                                     				  		</tr>
                                     				  		
                                     				  		<tr>
                                     				  		<td colspan='2'>asfdasdf</td>
                                     				  		</tr>
                                     				  		
                                     				  		<tr>";
                                     				  
                                     				  print "<td><table border='0' width='50%' align='right'>";
                                     				  
                                     				  for ($j = 0; $j < $rowCount +1; $j++) 
                                     				  {
                                     				  	
                                     				  	print "<tr>";
                                     				   
                                     				  	
                                     				  	if(count($controlList) > $j) 
                                     				  	{
                                     				  		print "<td style='color: #000000'>".$controlList[$j]->value."</td>";
                                     				  		print "<td  style='color: #000000'  valign='top' style='padding:0;margin-top: 0px;'> <div class='rightedge' style='color: #000000'>  </div></td>";
                                     				  		
                                     				  	}
                                     				  	
                                     				  	print "</tr>";
                                     				  }
                                     				  
                                     				  print "</table>
                                     				  </td>";
                                     				  

                                     				  print "<td>
                                     				  <table  border='0' width='50%' align='left'>";
                                     				  
                                     				    
                                     				  for ($j = 0; $j < $rowCount+1; $j++) {
                                     				  	
                                     				  	print "<tr>";
                                     				  	
                                     				  print count($controlList3);
                                     				 if(count($controlList3) > $j) 
                                     				  	{
                                     				  		print "<td style='color: #000000'> <div class='leftedge' style='color: #000000'>  </div></td>";
                                     				  		print "<td style='color: #000000'>".$controlList3[$j]->value."</td>";
                                     				  		
                                     				  		
                                     				  	}
                                     				  	else 
                                     				  	{
                                     				  		$index = $j -count($controlList2) ;
                                     				  		
                                     				  		if($index < count($controlList2) && $index > 0)
                                     				  		{
                                     				  				print "<td style='color: #000000'> <div class='leftedge' style='color: #000000'> </div></td>";
                                     				  		print "<td style='color: #000000'>".$controlList2[$index]->value."</td>";
                                     				  	
                                     				  		}
                                     				  		else {
                                     				  				print "<td style='color: #000000'> <div class='' style='color: #000000'>  </div></td>";
                                     				  				print "<td style='color: #000000'></td>";
                                     				  	
                                     				  	
                                     				  		}
                                     				  	
                                     				  	}
                                     				  	
                                     				  	print "</tr>";
                                     				  }
                                     				  
                                     				  print "</table></td>";
                                     				  
                                     				  
                                     				  
                                     				  print "</tr></table>";
                                     				  
                                                     ?>
                                                    
                                                 <div class="VericleEdge" style="color: #000000">
                                                     
                                                      </div>
                                               
                                                    </td>
                                                    </tr>
                                                    </thead>
                                                    </table>    
                    <table border="0"  width="835"  bgcolor="ffffff"  style="border-color: #666464;" >
                    <tr>
                    
                    
                    <td align="center">                                     
       
  <?php 
			$ModelImageName = "ProductImages/" ;
			$ModelImageName .= $_GET['model'].".jpg" ;
			print "<img src='".$ModelImageName ."' valign='middle' width='750' border='0'>";
        ?>          
        </td>
        </tr>
        </table>
                      
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

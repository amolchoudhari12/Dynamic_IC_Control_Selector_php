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
	font-size:10px;
}

.nodeText
{
	white-space:nowrap;
	color:#000000;

}
.nodes {
	width:18px;
	background:url(1.gif) no-repeat;
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
  .box1{

  width:auto;
	height:auto;
  		

	border-color: black black black #000000;

	border-style: solid;

	border-top-width: 1px;

	border-right-width: 1px;

	border-bottom-width: 1px;

	border-left-width: 1px;

	font-size : 10px;
	margin-left :110px;

	

}

     


.blank_vertical_line {
	width:18px;
	background:url(2.gif) repeat-y;
}
.blank_vertical_line_right {
	background:url(2_right.gif) repeat-y;
}

.box_number1 {
	text-align:right;
	padding-right:10px;
}
.box_number2 {
	text-align:right;
	padding-right:10px;
}
.box_number3 {
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
                       
                  
                     
                     	<tr  >
					<td align="left">
					
					<div style="Display:none">
                                   <span style="color:#ffffff;font-size:12px;">
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
                             
              </div>
                    				
                                    </td>

</tr>
                     
                   
                    
				
					</table>				
                    				
              
                    			<table width="900px" border="1" bgcolor="ffffff">
                    			<tr>
                    			
                    			<td  >
                    			
                    

<?php 


$LeftSideOptionValue = 
 "<div style='position:absolute; margin-left: [#MARIGN_LEFFT#]px '>
          <!-- padding between 1st and 2nd nodes starts here -->
          <div style='float:left; width:20px;'>&nbsp;</div>
          <!-- padding between 1st and 2nd nodes ends here -->
          <div style='float:right;'>
            <table cellpadding='0' cellspacing='0' border='0'>
              <tr>
                <td class='box_number'>[#DIGIT_NO#]</td>
              </tr>
              <tr>
                <td align='right'><input type='text' value='' style='color:#000000;width:20px' maxlength='4'  style='width:20px; padding: 2px' id='Text2'  name='dgtbox1' /></td>
              </tr>
              <tr>
                <td><table cellpadding='0' cellspacing='0' border='0'>
                     <tr>
                      <td class='nodeTitle_left nodeText' style='width:[#TD_WIDTH#]px'>[#TD_PARAM_NAME#]</td>
                      <td class='blank_vertical_line' style='height:[#TD_HEIGHT#]px'>&nbsp;</td>
                     </tr>
                  
                    [#ROW_OPTION_VALUES#]
                  </table>
               </td>
              </tr>
            </table>
          </div>
        </div>";


$RightSideOptionValue = " <div style='position:absolute; margin-left:[#MARIGN_LEFFT#]px'>
          <!-- padding between 2nd and 3rd nodes starts here -->
          <div style='float:left; width:20px;'>&nbsp;</div>
          <!-- padding between 2nd and 3rd nodes ends here -->
          <div style='float:right'>
            <table cellpadding='0' cellspacing='0' border='0'>
              <tr>
                <td class='box_number_right'>[#DIGIT_NO#]</td>
              </tr>
              <tr>
                <td align='left'><input type='text' value='' style='color:#000000;width:20px' maxlength='4'  style='width:20px; padding: 2px' id='Text6'  name='dgtbox1' /></td>
              </tr>
              <tr>
                <td><table cellpadding='0' cellspacing='0' border='0'>
                    
                    <tr>
                      
                      <td class='blank_vertical_line_right' style='height:[#TD_HEIGHT#]px'>&nbsp;</td>
                      <td class='nodeTitle_left nodeText'>[#TD_PARAM_NAME#]</td>
                    </tr>
                    
                    [#ROW_OPTION_VALUES#]
                  </table></td>
              </tr>
            </table>
          </div>
        </div> ";



function GetDots($count)
{
	$dots ="";

	for ($i = 0; $i < $count; $i++) {
			$dots .=" . ";
	}
	
		
	return $dots;
}
$items = array();
$items11 = array();
$itemsdotted = array();

array_push($items,"4-20 Amol");
array_push($items,"3-6VDC Priya");
array_push($items,"4-16VDC 999999");
array_push($items,"+-1VDC Vilasreao");
  array_push($items,"+-10 Anita");
  array_push($items,"+-100 VDCExternal");
  array_push($items,"+ DCExasdfaternal");
  
 
  
array_push($items11,"4-20 Amol");
array_push($items11,"3-6VDC Priya");
array_push($items11,"4-16VDC 999999");
array_push($items11,"+-1VDC Vilasreao");
  array_push($items11,"+-10 Anita");
  array_push($items11,"+-100 VDCsadfExternal");
  array_push($items11,"+DCExassdfdfaternal");
  array_push($items11,"+-10 Aasdfnita");
  array_push($items11,"+-100 VDCExternal");

   array_push($items11,"+DCExassdfdfaternal");
  array_push($items11,"+-10 Aasdfnita");
  array_push($items11,"+-100 VDCExternal");
    
array_push($items11,"4-20 Amol");
array_push($items11,"3-6VDC Priya");
array_push($items11,"4-16VDC 999999");
array_push($items11,"+-1VDC Vilasreao");
  array_push($items11,"+-10 Anita");
  array_push($items11,"+-100 VDCsadfExternal");
  array_push($items11,"+DCExassdfdfaternal");
  array_push($items11,"+-10 Aasdfnita");
  array_push($items11,"+-100 VDCExternal");

   array_push($items11,"+DCExassdfdfaternal");
  array_push($items11,"+-10 Aasdfnita");
  array_push($items11,"+-100 VDCExternal");
      
array_push($items11,"4-20 Amol");
array_push($items11,"3-6VDC Priya");
array_push($items11,"4-16VDC 999999");
array_push($items11,"+-1VDC Vilasreao");
  array_push($items11,"+-10 Anita");
  array_push($items11,"+-100 VDCsadfExternal");
  array_push($items11,"+DCExassdfdfaternal");
  array_push($items11,"+-10 Aasdfnita");
  array_push($items11,"+-100 VDCExternal");

   array_push($items11,"+DCExassdfdfaternal");
  array_push($items11,"+-10 Aasdfnita");
  array_push($items11,"+-100 VDCExternal");
  
  $length = 0;
  $width = 100;


									foreach($items as $item1)
									{	
									  if(strlen($item1) > $length)
									   $length = strlen($item1);
									}
  
								
									if($length <30)
									{
										$count =1;
										
										foreach($items as $item1)
										{	
										   $dottedCount = 20 - (strlen($item1)+2 );
											$str1 = $count.GetDots($dottedCount) .$item1;
											 array_push($itemsdotted,$str1);
											 $count ++;
											 
											// print strlen($item1). ":". $dottedCount."<br/>";
											
										}
										
										
									}
									else 
									{
										$width +=30;
										
									}
   
                    
                   
                                          
                       $trActual = "";
                    
                  				  foreach($itemsdotted as $item2)
										{	
											
											$temp ="<tr>
                      <td align='left' class='nodeText'>".$item2." </td>
                      <td class='nodes'>&nbsp;</td>
                    </tr>";
											$trActual .=$temp; 
										  
										}  
									  
                    
									     
									      $tr =  $trActual;
									      $itemsdotted1 =  array();
									      foreach($items11 as $item1)
										{	
										   $dottedCount = 24 - (strlen($item1)+2 );
											$str1 = $count.GetDots($dottedCount) .$item1;
											 array_push($itemsdotted1,$str1);
											 $count ++;
											 
											// print strlen($item1). ":". $dottedCount."<br/>";
											
										}
										
										
      
 
                       $trActual = "";
                    
                  				  foreach($itemsdotted1 as $item2)
										{	
											
											$temp ="<tr>
                   <td align='left' class='nodeText'>".$item2." </td>
                      <td class='nodes'>&nbsp;</td>
                    </tr>";
											$trActual .=$temp; 
										  
										}  
									  
                    
     
      $tr1 =  $trActual;
   
      
       $itemsdotted2 =  array();
      foreach($items as $item1)
										{	
										   $dottedCount = 30 - (strlen($item1)+2 );
											$str1 = $count.GetDots($dottedCount) .$item1;
											 array_push($itemsdotted2,$str1);
											 $count ++;
											 
											// print strlen($item1). ":". $dottedCount."<br/>";
											
										}
										
										
      
 
                       $trActual = "";
                    
                  				  foreach($itemsdotted2 as $item2)
										{	
											
											$temp ="<tr>
                    <td align='left' class='nodeText'>".$item2." </td>
                      <td class='nodes'>&nbsp;</td>
                    </tr>";
											$trActual .=$temp; 
										  
										}  

$tr2 = $trActual;




  
       $itemsdotted3 =  array();
      foreach($items as $item1)
										{	
										   $dottedCount = 30 - (strlen($item1)+2 );
											$str1 = $count.GetDots($dottedCount) .$item1;
											 array_push($itemsdotted3,$str1);
											 $count ++;
											 
											// print strlen($item1). ":". $dottedCount."<br/>";
											
										}
										
										
      
 
                       $trActualRight = "";
                    
                  				  foreach($itemsdotted2 as $item2)
										{	
											
											$temp =" <tr>
                      
                      <td class='nodes_right'>&nbsp;</td>
                      <td class='nodeText'>$item2</td>
                    </tr>
                    <tr>";
											$trActualRight .=$temp; 
										  
										}  

$right = $trActualRight;

$rightsss = "     
                    <tr>
                      
                      <td class='nodes_right'>&nbsp;</td>
                      <td  style='white-space:nowrap'>kfdlfkdfd dfdfdfdf...............1</td>
                    </tr>
                    <tr>
                      
                      <td class='nodes_right'>&nbsp;</td>
                      <td  style='white-space:nowrap'>dfdfdfdfd  fdfd dfddf......2</td>
                    </tr>
                    <tr>
                      
                      <td class='nodes_right'>&nbsp;</td>
                      <td  style='white-space:nowrap'>dfdfdfdfdfdf dfdfd dfdfdfdfdf...3</td>
                    </tr>";

$right1 = "     
                    <tr>
                      
                      <td class='nodes_right'>&nbsp;</td>
                      <td  style='white-space:nowrap'>kfdlfkdfd dfdfdfdf...............1</td>
                    </tr>
                    <tr>
                      
                      <td class='nodes_right'>&nbsp;</td>
                      <td  style='white-space:nowrap'>dfdfdfdfd  fdfd dfddf......2</td>
                    </tr>
                    <tr>
                      
                      <td class='nodes_right'>&nbsp;</td>
                      <td  style='white-space:nowrap '>dfdfdfdfdfdf dfdfd dfdfdfdfdf...3</td>
                    </tr>";
//Left Side Values

$Width = 120;

$bodyOfItem = str_replace("[#DIGIT_NO#]", "1", $LeftSideOptionValue);
$bodyOfItem = str_replace("[#MARIGN_LEFFT#]", "0", $bodyOfItem);
$bodyOfItem = str_replace("[#TD_PARAM_NAME#]", "Amol Choudhari", $bodyOfItem);
$bodyOfItem = str_replace("[#TD_WIDTH#]", $Width, $bodyOfItem);
$bodyOfItem = str_replace("[#TD_HEIGHT#]", "0", $bodyOfItem);
$bodyOfItem = str_replace("[#ROW_OPTION_VALUES#]", $tr, $bodyOfItem);

$Width += 40;
$height = (17* 10) + 30;

$bodyOfItem1 = str_replace("[#DIGIT_NO#]", "2", $LeftSideOptionValue);
$bodyOfItem1 = str_replace("[#MARIGN_LEFFT#]", "0", $bodyOfItem1);
$bodyOfItem1 = str_replace("[#TD_PARAM_NAME#]", "Pramod Choudhari", $bodyOfItem1);
$bodyOfItem1 = str_replace("[#TD_WIDTH#]",$Width, $bodyOfItem1);
$bodyOfItem1 = str_replace("[#TD_HEIGHT#]",$height, $bodyOfItem1);
$bodyOfItem1 = str_replace("[#ROW_OPTION_VALUES#]", $tr1, $bodyOfItem1);

$Width += 40;
$height = $height + (17*(count($items11)));

$bodyOfItem2 = str_replace("[#DIGIT_NO#]", "3", $LeftSideOptionValue);
$bodyOfItem2 = str_replace("[#MARIGN_LEFFT#]", "0", $bodyOfItem2);
$bodyOfItem2 = str_replace("[#TD_PARAM_NAME#]", "Priya Choudhari", $bodyOfItem2);
$bodyOfItem2 = str_replace("[#TD_WIDTH#]", $Width, $bodyOfItem2);
$bodyOfItem2 = str_replace("[#TD_HEIGHT#]", $height, $bodyOfItem2);
$bodyOfItem2 = str_replace("[#ROW_OPTION_VALUES#]", $tr2, $bodyOfItem2);

$totalHeight = $height;


$Width += 40;


//Right Side Values
$bodyOfItem3 = str_replace("[#DIGIT_NO#]", "4", $RightSideOptionValue);
$bodyOfItem3 = str_replace("[#MARIGN_LEFFT#]", $Width, $bodyOfItem3);
$bodyOfItem3 = str_replace("[#TD_PARAM_NAME#]", "Mayur Choudhari", $bodyOfItem3);
$bodyOfItem3 = str_replace("[#TD_HEIGHT#]", $height, $bodyOfItem3);
$bodyOfItem3 = str_replace("[#ROW_OPTION_VALUES#]", $right, $bodyOfItem3);


$bodyOfItem4 = str_replace("[#DIGIT_NO#]", "5", $RightSideOptionValue);
$bodyOfItem4 = str_replace("[#MARIGN_LEFFT#]", "280", $bodyOfItem4);
$bodyOfItem4 = str_replace("[#TD_PARAM_NAME#]", "Mayur Choudhari", $bodyOfItem4);
$bodyOfItem4 = str_replace("[#TD_HEIGHT#]", "100", $bodyOfItem4);
$bodyOfItem4 = str_replace("[#ROW_OPTION_VALUES#]", $right1, $bodyOfItem4);




?>
					
						<?php 
						
						
						$margin = (900 - ($Width-20))/2;
						$margin = $margin/2;
						$totalHeight += 300;
							
					print	"<div style='height:".$totalHeight."px; margin-left:".$margin."px; margin-right:auto;' >
						  <table cellpadding='0' cellspacing='0' border='0'>
						    <tr>
						      <td><!-- first node starts here -->";

						print $bodyOfItem;
						print $bodyOfItem1;
						print $bodyOfItem2;
						print $bodyOfItem3;
						print $bodyOfItem4;
												
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

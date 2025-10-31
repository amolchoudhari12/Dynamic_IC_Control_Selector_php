<html>
<head>
    <style>
        .tdKey
        {
            width: 30%;
        }
        
        .tdValue
        {
            width: 70%;
        }
    </style>
    <script src="Scripts/jquery-1.5.1.min.js" type="text/javascript"></script>
    <script src="Scripts/jquery-ui-1.8.13.custom.min.js" type="text/javascript"></script>
    <link href="Styles/ui-darkness/jquery-ui-1.8.13.custom.css" rel="stylesheet" type="text/css" />
    <script language="javascript">
 function printpage()
  {
   window.print();
  }
</script>
    <link href="Styles/CommonStyle.css" rel="stylesheet" type="text/css" />
    <link href="Styles/style_wizard.css" rel="stylesheet" type="text/css" />
    <title>OTEK Corp Home Page - Digital Panel Meters, Bargraphs, Controllers</title>
    <meta name="keywords" content="digital panel meters bargraphs controllers nuclear dpm transmitters receivers" />
    <meta name="description" content="OTEK Corp's home page featuring superior digital panel meters, bargraphs, and controllers" />
</head>
<body bgcolor="#000000">
    <form name="form1" method="post" >
    
   <?php print "<input type='hidden'  name='thankyou'  id='thankyou' value='thankyou'> ";?>
   
    	<?php include 'SQLs/Save-User-Request.php';
    	  	 
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
        </div>
    </div>
    <div id="content" align="center" >
    
        
        <table border="0" width="835" cellspacing="0" cellpadding="0" bgcolor="383838"                
                                style="border-color: #666464">
                        <tr>
                        
                        
                       <td align="center" valign="top" >
                         <div >
                        <div id="users-contain">
                            <table border="0" id="userss" style="background: #000000; border-color: #666464">
                               <tr>
					                <td class="ui-widget-header " >
					                    <h1>
					                        Thank you!</h1>  
					                </td>
					            </tr>
					             <tr>
                                    <td>
                                        <label>
                                            <span style="font-size: 14px">Your request has been received. <br/> We will reply shortly.<br/><br/>   sales@otekcorp.com</span>
                                        </label>
                                        <br />
                                       
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                        
                        </td>
                        
                        </tr>       
                                <tr>
                                    <td align="center" valign="top" >
									<?php 
									include 'Classes\SelectControl.php';
												include 'Classes\OptionItem.php';	
												$var ="";
												$var= $_POST['modelName']; // $_SERVER['QUERY_STRING'];																								
												include 'Classes\XML_Parser.php';	
									
									?>
                                       
                                            <div id="users-contain" class="ui-widget">
                                            <div aling="center">
                                           <table border="1" id="users-contain"  style="border-color: #666464;" class="ui-widget-content">
                                            
                                            <tr class="ui-widget-header" >
                                            <td colspan="2">
                                             <span id="MainContent_Label1" style="color:#ffffff;font-size:Larger;font-weight:bold;">Summary of Ordering Info
                                             </span>
                                            </td>
                                            </tr>
                                            
                                            
                                            <tr>
                                            <td style="width:20%">
                                            Model Name
                                            </td>
                                             <td>
                                               <?php print  $_POST['modelName'];
                                               	print "<input type='hidden'  name='modelName'  id='modelName'  value='". $_POST['modelName']."' />";
                                               ?>
                                             
                                            </td>
                                            </tr>
                                            
                                            
                                            <tr>
                                            <td>
                                            P/N Number
                                            </td>
                                             <td>
                                                                             
                                    
                                      [ <?php 
                                                 $count = 1;
                                                 $initializer = 0;	
                                                 $ModelDigitsSequence ="";					  
											
                                                 
                                                 
											     for ($i = $initializer; $i <= $parametersCount; $i++) 
												{
													$digitName1 = 'dgt'.$count;
													if(isset($_POST[$digitName1]))
													  $ModelDigitsSequence .= $_POST[$digitName1].",";
												
													$count ++;
											    }
											    print rtrim($ModelDigitsSequence, " \t,");
											    //print $ModelDigitsSequence;
											    print " ";
											    
											    	 ?>]
                                            </td>
                                            </tr>
                                            
                                            <tr>
                                            <td>
                                            <span id="MainContent_Label1" style="color:#ffffff;font-weight:bold;">Quantities  </span>
                                            </td>
                                            
                                            
                                            <td>
                                            <?php  print $_POST['quantities']; ?>
                                            </td>
                                            
                                            
                                            </tr>
                                            
                                            
                                            </table>
                                  
                                  <br/> <br/>
                                   
                                    
                                           
                                                <table border="1" id="users-contain"  style="border-color: #666464;" class="ui-widget-content">
				                                       <thead  class="ui-widget-header" >
                                                        <tr >
                                                            <th style='width: 50px;color:ffffff'>
                                                                Digit #
                                                            </th>
                                                            <th style='width: 300px ;color:ffffff'>
                                                                Digit Description
                                                            </th>
                                                            <th style='width: 500px; color:ffffff'>
                                                                Selected number
                                                            </th>
                                                            <th style='width: 500px; color:ffffff'>
                                                                Description
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
													 		 $digitNameL = 'dgt'.$count;
													 		 $digitNameR = 'dgt'.($count+1);
													 		 $digitName2 = 'dgtCustom'. $count;
													 		 //$digitName1 = 'dgtCustom'.$count;  
													 		  print " <tr> <td>".$count."-".($count+1)."</td> <td>";
															  print $parameters[$i] . "</td>";
															  print " <td > <label id='lbl".$count."'> $_POST[$digitNameL] $_POST[$digitNameR]</label></td>";
															  print " <td > <label id='lblDesc".$count."'> $_POST[$digitName2]</label></td>";
								 							  $count +=1;
													 	}
													 	else {
													 	  $digitName1 = 'dgt'.$count; 
													 	  $digitName2 = 'dgtCustom'. $count;
													 	  
								 		 				  print " <tr> <td>".$count."</td> <td>";
														  print $parameters[$i] . "</td>";
														
														  print " <td > <label id='lbl".$count."'> $_POST[$digitName1]</label></td>";
														   print " <td > <label id='lblDesc".$count."'> $_POST[$digitName2]</label></td>";
														 
								 	
								 							}
														
														  $count+=1;
														  
														 }
                                                                       
                                                      print "</tr>";  ?>
                                                                     
                                                                
                                                                   
                                                                       
                                                    </tbody>
                                                </table>
                                                 <input type="button" value="Print" onclick="printpage();" style="background-color: #123456">
												
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </table>
    </div>
    
  
    <div id="foot">
        <center>
            <font color="#FFFFFF">&copy; 2010 Copyright OTEK Corp | All Rights Reserved</font>
        </center>
    </div>
     <span id="MainContent_Label1" style="color:#000000;font-size:Larger;font-weight:bold; display:none"> 
     <?php 
  
							    $customerName = $_POST['name'];
							    $email = $_POST['email'];
							    $ModelName = $_POST['modelName'];
							    $Quantities = $_POST['quantities'];
							    $emailCC = $_POST['emailcc'];
							    
							    $cc1 = "";
								$cc2 ="";
								$cc3="";
								$cc4="";
								$cc5="";
							  
							    list($cc1, $cc2, $cc3, $cc4, $cc5) = split(";", $emailCC);
							 
							    
                              $count = 1;
                              $initializer = 0;	
                              $ModelDigitsSequence ="";					  
							  for ($i = $initializer; $i < $parametersCount; $i++) 
							  {
							  	$digitName1 = 'dgt'.$count;
							  	$ModelDigitsSequence .= $_POST[$digitName1];
								$count ++;
							  }
					   
											  
    
   include 'Send-Mail.php';
 
  ?>
   
   
  </span>
    </form>
</body>
</html>
